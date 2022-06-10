<?php

namespace Modules\Article\Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Article\Entities\Post;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'name'              => substr($this->faker->text(30), 0, -1),
            'name'              => 'Ví điện tử ' .$this->faker->numberBetween(1,20),
            'slug'              => '',
            'intro'             => 'Trong khi hàng loạt ngành hàng chịu ảnh hưởng nặng nề bởi dịch COVID-19 thì thanh toán điện tử (E-payment) nói chung và ví điện tử (E-wallet) nói riêng lại có cơ hội bứt phá vượt trội',
            'content'           => 'Trong khi hàng loạt ngành hàng chịu ảnh hưởng nặng nề bởi dịch COVID-19 thì thanh toán điện tử (E-payment) nói chung và ví điện tử (E-wallet) nói riêng lại có cơ hội bứt phá vượt trội',
            'type'              => $this->faker->randomElement(['Article', 'Blog', 'News', 'Recruitment']),
            'is_featured'       => $this->faker->randomElement([1, 0]),
            'featured_image'    => 'https://picsum.photos/1200/630',
            'status'            => 1,
            'category_id'       => $this->faker->numberBetween(1, 5),
            'meta_title'        => '',
            'meta_keywords'     => '',
            'meta_description'  => '',
            'meta_og_image'     => '',
            'meta_og_url'       => '',
            'created_by_name'   => '',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
            'published_at'      => Carbon::now(),
        ];
    }
}
