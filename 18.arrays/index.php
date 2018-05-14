<?php

/**
 *
 */
class Post
{

  public $title;

  public $author;

  public $published;


  function __construct($title, $author, $published)
  {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }
}

$posts = [
    new post('My First Post', 'FD', true),
    new post('My Second Post', 'FD', true),
    new post('My Third Post', 'WE', true),
    new post('My Fourth Post', 'RY', false)
];

// Array Filter
//
// $unpublishedPosts = array_filter($posts, function ($post) {
//
//       return ! $post->published;
//
// });
//
// var_dump($unpublishedPosts);


// Array Map

// $modified = array_map(function ($post) {
//
//  return ['title' => $post->title];
//
// }, $posts);
//
// var_dump($modified);

// Array Column
//
// $titles = array_column($posts, 'title');
//
// var_dump($titles);


// Putting it all together 

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

 $author = array_column($posts, 'author', 'title');

var_dump($author);
