<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    public function getNews()
    {
        $faker = Factory::create();
        $news = [];
        for($i = 0; $i < 10; $i++) {
            $news[] = [
                'id' => $i,
                'title' => $faker->jobTitle(),
                'description' => $faker->text(250),
                'author' => $faker->userName()
            ];
        }
        return $news;
    }

    public function getNewsById($id)
    {
        $faker = Factory::create();

        return [
            'id' => $id,
            'title' => $faker->jobTitle(),
            'description' => $faker->text(250),
            'author' => $faker->userName()
        ];
    }
    */

    public function getCategories()
    {
        //$categories = $this->getCategories();
        $categories = [
            1 => [
                'id' => 1,
                'title' => 'Политика',
                'text' => 'И снова мы всех...!',
            ],
            2 => [
                'id' => 2,
                'title' => 'Спорт',
                'text' => 'И снова нас все...(((',
            ],
            3 => [
                'id' => 3,
                'title' => 'Экономика',
                'text' => 'Денег нет, но вы держитесь!',
            ],
            4 => [
                'id' => 4,
                'title' => 'Происшествия',
                'text' => 'Покой нам только снится...(((',
            ],
            5 => [
                'id' => 5,
                'title' => 'Коронавирус',
                'text' => 'Спасайся, кто может!(((',
            ],
        ];

        return $categories;
    }

    public function getNews()
    {
        $news = [
            1 => [
                'id' => 1,
                'title' => 'Новость 1',
                'text' => 'А у нас новость 1 и она очень хорошая!',           
                'category_id' => ''
            ],
            2 => [
                'id' => 2,
                'title' => 'Новость 2',
                'text' => 'А тут плохие новости(((',
                'category_id' => 2
            ],
            3 => [
                'id' => 3,
                'title' => 'Sрочная новость',
                'text' => 'С пылу с жару!',
                'category_id' => 3
            ],
            4 => [
                'id' => 4,
                'title' => 'Вчерашняя новость',
                'text' => 'Для тех, кто вчера спал!',
                'category_id' => 4
            ],
        ];

        return $news;

    }



    public function getNewsByCategoryId($id) 
    {
        $news = [];
        foreach ($this->getNews() as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }

public function getNewsById($id)
{
    return $this->getNews()[$id] ?? [];

    /*foreach ($this->getNews() as $news) {
    *  if ($news['id'] == $id) {
    *        return $news;
    *    }
    *}
    *return [];
    */
}

}