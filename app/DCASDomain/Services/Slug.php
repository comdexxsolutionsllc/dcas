<?php
namespace DCASDomain\Services;

use DCASDomain\Models\Post;

class Slug {

    /**
     * @param     $title
     * @param int $id
     *
     * @return string
     * @throws \Exception
     */
    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        $slug = str_slug($title);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        // If we haven't used it before then we are all good.
        if ( ! $allSlugs->contains('slug', $slug))
        {
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i ++)
        {
            $newSlug = $slug.'-'.$i;
            if ( ! $allSlugs->contains('slug', $newSlug))
            {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }


    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Post::select('slug')->where('slug', 'like', $slug.'%')->where('id', '<>', $id)->get();
    }
}

/**
 * Example
 */
//// URL:  https://dotdev.co/creating-unique-title-slugs-with-laravel-7f67badd98f9#.ewlmw8wez
//// On create
//$post->slug = $slug->createSlug($request->title);
//// On update
//if ($post->slug != $request->slug) {
//    $post->slug = $slug->createSlug($request->slug, $id);
//}
//// ROUTE
//Route::get('/post/{slug}', function(){
//    $post = \App\Post::where('slug', $slug)->firstOrFail();
//});
