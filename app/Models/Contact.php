<?php

namespace App\Models;

use App\Dictionaries\AppDomain;
use App\Dictionaries\Cms\CategoryType;
use App\Dictionaries\Cms\UserStatus;
use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

/**
 * @property integer $id
 * @property integer $domain_id
 * @property integer $user_id
 * @property integer $category_type
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $job_title
 * @property string $city
 * @property string $country
 * @property string $address
 * @property string $company
 * @property string $title
 * @property string $description
 * @property string $image_base_url
 * @property string $image_base_path
 * @property string $created_at
 * @property string $updated_at
 */
class Contact extends Model
{
    use HasFactory, Filterable, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_contacts';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = [
        'domain_id',
        'first_name',
        'last_name',
        'phone',
        'category_type',
        'email',
        'job_title',
        'city',
        'country',
        'company',
        'address',
        'title',
        'description',
        'image_base_url',
        'image_base_path',
        'created_at',
        'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Filter by name
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function filterName($query, $value)
    {
        return $query->where('blog_contacts.name', 'like', '%' . $value . '%')
            ->orWhere('blog_contacts.first_name', 'like', '%' . $value . '%')
            ->orWhere('blog_contacts.last_name', 'like', '%' . $value . '%');
    }


    public function filterDomainId($query, $value)
    {
        return $query->where('blog_contacts.domain_id', $value);
    }

    public function filterCategoryType($query, $value)
    {
        return $query->where('blog_contacts.category_type', $value);
    }

    public function filterStatus($query, $value)
    {
        if ($value == UserStatus::DELETED) {
            return $query->onlyTrashed();
        }
        return $query->where('status', '=', $value);
    }

    /*
   * Short name
   * Mr V - MV
   * */
    public function getShortNameShow()
    {
        $name = $this->first_name;
        if (empty($name)) {
            $name = $this->last_name;
        }
        $listWord = explode(" ", $name);
        $count = 0;
        $charText = '';
        $listWord = array_slice($listWord, -2);

        foreach ($listWord as $word) {
            if ($count == 2) {
                continue;
            }
            $word = Str::ascii($word);

            $charText .= substr($word, 0, 1);
            $count++;
        }

        $charText = Str::upper(Str::ascii($charText));

        return Str::ascii($charText);
    }

    public function getDomainName()
    {
        $allDomain = AppDomain::all();
        $domainName = '';
        if ($this->domain_id) {
            $domainName = $allDomain[$this->domain_id];
        }

        return $domainName;
    }

    public function getCategoryTypeName()
    {
        $allType = CategoryType::all();
        $domainName = '';
        if ($this->category_type) {
            $domainName = $allType[$this->category_type];
        }

        return $domainName;
    }

    /*
   * thumbnail_base_url',
   * 'thumbnail_path',
   * */
    public function getAvatarUrl($type = 1, $width = 32, $height = 32)
    {
        $url = asset_cdn('themes/finder/img/avatars/36.png');
        if ($this->image_base_path) {
            $url = $this->image_base_url . '/';
            //Face avatar
            if ($type == 2) {
                //$url = $url . 'c_crop,g_face,h_400,w_400/r_max/c_scale,w_200';
                $url = $url . 'c_thumb,g_face,h_32,w_32';
            }
            $url = $url . '/' . $this->image_base_path;
            if ($width) {
                $cropValue = '/w_' . $width . ',h_' . $height . ',c_fill,q_auto,f_auto/';
                $url = $this->image_base_url . $cropValue . $this->image_base_path;
            }
        }

        return $url;
    }
}
