<?php

namespace App\Models;

class Post
{
  private static $blog_post = [
    [
      'title' => 'First Article',
      'slug' => 'first-article',
      'author' => 'Alivan',
      'body' => 'First Article Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident eligendi quidem, doloribus ex voluptates
            placeat. Aspernatur quaerat dolore temporibus hic. Commodi id facilis ut, ratione, labore sunt quam voluptate optio
            reprehenderit, quisquam repellat amet deserunt similique dolore ducimus architecto quis mollitia neque? Quos numquam
            aut voluptas provident odio illo fuga, beatae excepturi vel nostrum repellat eaque recusandae quisquam cupiditate
            veritatis deleniti obcaecati architecto, voluptates quod in! Eveniet quia dolor ratione beatae illum voluptatum quae
            recusandae minima labore voluptatem esse quos officia ipsum corporis, sint optio nobis, sed qui quisquam cum ipsa
            magni earum ea. Non cumque nam officia alias totam!',
    ],
    [
      'title' => 'Second Article',
      'slug' => 'second-article',
      'author' => 'Yami',
      'body' => 'Second Article Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident eligendi quidem, doloribus ex voluptates
            placeat. Aspernatur quaerat dolore temporibus hic. Commodi id facilis ut, ratione, labore sunt quam voluptate optio
            reprehenderit, quisquam repellat amet deserunt similique dolore ducimus architecto quis mollitia neque? Quos numquam
            aut voluptas provident odio illo fuga, beatae excepturi vel nostrum repellat eaque recusandae quisquam cupiditate
            veritatis deleniti obcaecati architecto, voluptates quod in! Eveniet quia dolor ratione beatae illum voluptatum quae
            recusandae minima labore voluptatem esse quos officia ipsum corporis, sint optio nobis, sed qui quisquam cum ipsa
            magni earum ea. Non cumque nam officia alias totam!',
    ],
  ];

  public static function all()
  {
    return collect(self::$blog_post);
  }

  public static function find($slug)
  {
    $post = static::all();
    return $post->firstWhere('slug', $slug);
  }
}
