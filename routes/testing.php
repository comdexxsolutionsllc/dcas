<?php

/*
|--------------------------------------------------------------------------
| Testing Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/users-test', function ()
//{
//    return \Cache::remember('users.all.transform', Time::minute, function ()
//    {
//        return \Fractal::collection(App\User::all())->transformWith(new DCASDomain\Transformers\UserTransformer)->toArray();
//    });
//});

//Route::group([ 'middleware' => 'impersonate' ], function ()
//{
//Route::get('test_impersonate', function ()
//{
//    return [
//        'AuthUser'          => Auth::user(),
//        'AuthImpersonating' => Auth::user()->isImpersonating()
//    ];
//});
//});

//Route::get('/testing', function ()
//{
//    return view('testing.test');
//});

/**
 * SendGrid Test
 */
//Route::get('/sendgrid-test', function ()
//{
//    $data = [
//        'category'    => 'Marketing',
//        'unique_args' => [
//            'variable_1' => 'abcdefg'
//        ]
//    ];
//
//    Mail::send('errors.503', $data, function ($message)
//    {
//        $data['category'] = 'category';
//        $data['unique_args']['variable_1'] = 'abc';
//
//        $header = EmailTest::asString($data);
//
//        $message->getSwiftMessage()->getHeaders()->addTextHeader('X-SMTPAPI', $header);
//
//        $message->to('kyothehusky@gmail.com', 'Ally')->subject('This is a demo!');
//    });
//});
//
//class EmailTest {
//
//    /**
//     * @param $data
//     *
//     * @return mixed|string
//     */
//    static public function asJSON($data)
//    {
//        $json = json_encode($data);
//
//        $json = preg_replace('/(["\]}])([,:])(["\[{])/', '$1$2 $3', $json);
//
//        return $json;
//    }
//
//
//    /**
//     * @param $data
//     *
//     * @return string
//     */
//    static public function asString($data)
//    {
//        $json = self::asJSON($data);
//        $str = wordwrap($json, 76, "\n   ");
//
//        return $str;
//    }
//}

//Route::get('/geoip', function ()
//{
//    return (new PulkitJalan\GeoIP\GeoIP())->getRaw();
//});

//Route::group([
//    'prefix' => 'sitemap'
//], function ()
//{
//    Route::get('/', 'SitemapController@index');
//    Route::get('/posts', 'SitemapController@posts');
//    Route::get('/categories', 'SitemapController@categories');
//    Route::get('/podcasts', 'SitemapController@podcasts');
//    Route::get('/sitemap.xml', 'SitemapController@index');
//});