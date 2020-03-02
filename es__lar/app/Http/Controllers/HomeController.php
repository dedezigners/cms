<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index')
            ->with('title', "CMS Dashbaord")
            ->with('modules', $this->getAllTablesList());
    }

    public function module($slug)
    {
        return view('admin.module')
            ->with('title', $slug)
            ->with('data', DB::table($slug)->get())
            ->with('columns', $this->getColumns($slug))
            ->with('modules', $this->getAllTablesList());
    }

    public function create($slug)
    {
        
        return view('admin.create')
            ->with('title', $slug)
            ->with('models', $this->getModels())
            ->with('columns', $this->getColumns($slug))
            ->with('modules', $this->getAllTablesList());
    }

    public function edit($slug, $id)
    {
        return view('admin.edit')
            ->with('title', $slug)
            ->with('models', $this->getModels())
            ->with('columns', $this->getColumns($slug))
            ->with('edit', DB::table($slug)->where('id', $id)->first())
            ->with('modules', $this->getAllTablesList());
    }

    public function store(Request $request, $slug)
    {
        // dd($request->all());

        if ($slug === 'settings') {
            $insert = [
                'email'         =>      $request->email,
                'phone'         =>      $request->phone,
                'address'       =>      $request->address,
            ];

        } elseif ($slug === 'slides') {

            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();

            $upload_dir = 'uploads/slides/';
            $image->move($upload_dir, $image_new_name);

            $insert = [
                'slide_text' => $request->slide_text,
                'button_1' =>  $request->button_1,
                'button_1_url' => $request->button_1_url,
                'button_2' => $request->button_2,
                'button_2_url' => $request->button_2_url,
                'image' => $upload_dir . $image_new_name
            ];

        } elseif ($slug === 'socials') {

            $insert = [
                'social' => $request->social,
                'social_link' =>  $request->social_link
            ];

        } elseif ($slug === 'statistics') {

            $insert = [
                'percentage' => $request->percentage,
                'title' => $request->title,
                'description' =>  $request->description
            ];

        } elseif ($slug === 'testimonials') {

            $insert = [
                'quote' => $request->quote,
                'name' => $request->name,
                'compnay' =>  $request->compnay
            ];

        } elseif ($slug === 'blogs') {
            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();

            $upload_dir = 'uploads/blogs/';
            $image->move($upload_dir, $image_new_name);

            $insert = [
                'user_id' => 1,
                'image' => $upload_dir . $image_new_name,
                'title' => $request->title,
                'slug' => $this->generateSlug($request->slug),
                'comments_counts' => $request->comments_counts,
                'description' =>  $request->description
            ];

        } elseif ($slug === 'teams') {
            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();

            $upload_dir = 'uploads/teams/';
            $image->move($upload_dir, $image_new_name);

            $insert = [
                'image' => $upload_dir . $image_new_name,
                'name' => $request->name,
                'designation' => $request->designation,
                'email' =>  $request->email,
                'linkedin' => $request->linkedin
            ];

        } elseif ($slug === 'menus') {

            $callToAction = isset($request->call_to_action) ? 1 : 0;
            $insert = [
                'name' => $request->name,
                'slug' => $this->generateSlug($request->slug),
                'call_to_action' =>  $callToAction
            ];

        } elseif ($slug === 'pages') {

            $insert = [
                'name' => $request->name,
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'page_url' => $this->generateSlug($request->page_url),
                'intro' => $request->intro,
                'content' => $request->content,
                'page_model' => $request->page_model
            ];

        } elseif ($slug = 'solutions') {
            
            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();

            $upload_dir = 'uploads/solutions/';
            $image->move($upload_dir, $image_new_name);

            $insert = [
                'name' => $request->name,
                'slug' => $this->generateSlug($request->slug),
                'image' => $upload_dir . $image_new_name,
                'content' => $request->content
            ];

        } else {
            return redirect()->route('module', ['slug' => $slug]);
        }

        if (count($insert) > 0) {
            
            DB::table($slug)->insert($insert);

        }
        
        Session::flash('success', 'Your have successfully added a new record in ' . $slug);
        return redirect()->route('module', ['slug' => $slug]);
    }

    public function update(Request $request, $slug, $id)
    {

        if ($slug === 'settings') {

            $insert = [
                'email'         =>      $request->email,
                'phone'         =>      $request->phone,
                'address'       =>      $request->address,
            ];

        } elseif ($slug === 'slides') {

            if ($request->hasFile('image')) {
                
                $image = $request->image;
                $image_new_name = time() . $image->getClientOriginalName();

                $upload_dir = 'uploads/slides/';
                $image->move($upload_dir, $image_new_name);
                $image_new_path = $upload_dir . $image_new_name;

                DB::table($slug)->where('id', $id)->update(['image' => $image_new_path]);
            }

            $insert = [
                'slide_text' => $request->slide_text,
                'button_1' =>  $request->button_1,
                'button_1_url' => $request->button_1_url,
                'button_2' => $request->button_2,
                'button_2_url' => $request->button_2_url
            ];

        } elseif ($slug === 'socials') {

            $insert = [
                'social' => $request->social,
                'social_link' =>  $request->social_link
            ];

        } elseif ($slug === 'statistics') {

            $insert = [
                'percentage' => $request->percentage,
                'title' => $request->title,
                'description' =>  $request->description
            ];

        } elseif ($slug === 'testimonials') {

            $insert = [
                'quote' => $request->quote,
                'name' => $request->name,
                'compnay' =>  $request->compnay
            ];

        } elseif ($slug === 'blogs') {
            
            if ($request->hasFile('image')) {
                
                $image = $request->image;
                $image_new_name = time() . $image->getClientOriginalName();

                $upload_dir = 'uploads/blogs/';
                $image->move($upload_dir, $image_new_name);
                $image_new_path = $upload_dir . $image_new_name;

                DB::table($slug)->where('id', $id)->update(['image' => $image_new_path]);
            }

            $insert = [
                'user_id' => 1,
                'title' => $request->title,
                'slug' => $this->generateSlug($request->slug),
                'comments_counts' => $request->comments_counts,
                'description' =>  $request->description
            ];

        } elseif ($slug === 'teams') {

            if ($request->hasFile('image')) {
                
                $image = $request->image;
                $image_new_name = time() . $image->getClientOriginalName();

                $upload_dir = 'uploads/teams/';
                $image->move($upload_dir, $image_new_name);
                $image_new_path = $upload_dir . $image_new_name;

                DB::table($slug)->where('id', $id)->update(['image' => $image_new_path]);
            }

            $insert = [
                'name' => $request->name,
                'designation' => $request->designation,
                'email' =>  $request->email,
                'linkedin' => $request->linkedin
            ];

        } elseif ($slug === 'menus') {

            $callToAction = isset($request->call_to_action) ? 1 : 0;
            $insert = [
                'name' => $request->name,
                'slug' => $this->generateSlug($request->slug),
                'call_to_action' =>  $callToAction
            ];
        } elseif ($slug === 'pages') {

            $insert = [
                'name' => $request->name,
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'page_url' => $this->generateSlug($request->page_url),
                'intro' => $request->intro,
                'content' => $request->content,
                'page_model' => $request->page_model
            ];

        } elseif ($slug = 'solutions') {

            if ($request->hasFile('image')) {

                $image = $request->image;
                $image_new_name = time() . $image->getClientOriginalName();
    
                $upload_dir = 'uploads/solutions/';
                $image->move($upload_dir, $image_new_name);
                $image_new_path = $upload_dir . $image_new_name;

                DB::table($slug)->where('id', $id)->update(['image' => $image_new_path]);
            }

            $insert = [
                'name' => $request->name,
                'slug' => $this->generateSlug($request->slug),
                'content' => $request->content
            ];

        } else {
            
            return redirect()->route('module', ['slug' => $slug]);
        }

        if (count($insert) > 0) {
            
            DB::table($slug)->where('id', $id)->update($insert);

        }

        Session::flash('success', 'Page updated requeste successfully executed');
        return redirect()->route('module', ['slug' => $slug]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, $id)
    {
        DB::table($slug)->where('id', $id)->delete();

        Session::flash('success', 'The post has been trashed.');
        return redirect()->back();
    }


    private function getModels()
    {
        $path = realpath(__DIR__ . '/../../../resources/views/templates');
        
        $manuals = [];
        $filesInFolder = \File::files($path);

        foreach($filesInFolder as $path)
        {
            $manuals[] = pathinfo($path);
        }
        
        return $manuals;
    }


    private function getAllTablesList()
    {
        $tables = DB::select('SHOW TABLES');
        $tableList = [];
        
        foreach ($tables as $key => $value) {

            $tab = $value->Tables_in_laravel_cms;

            if (
                $tab != 'failed_jobs' &&
                $tab != 'migrations' &&
                $tab != 'password_resets'
            ) {
                array_push($tableList, $tab);
            }
        }

        return $tableList;
    }


    private function skipFields($tableName)
    {
        switch ($tableName) {
            case 'blogs':
                return [
                    'id',
                    'user_id',
                    'created_at',
                    'updated_at'
                ];
                break;
            case 'users':
                return [
                    'id',
                    'email_verified_at',
                    'password',
                    'remember_token',
                    'updated_at'
                ];
                break;
            default:
                return [
                    'id',
                    'created_at',
                    'updated_at'
                ];
        }
    }


    private function getColumns($tableName)
    {
        $columns = DB::select('SHOW COLUMNS FROM ' . $tableName);
        $validColumns = [];

        foreach ($columns as $column) {

            $field = $column->Field;
            $type = $column->Type;

            if (!in_array($field, $this->skipFields($tableName))) {
                array_push($validColumns, [
                    'field'  =>  $field,
                    'type'  =>  $type
                ]);
            }   
        }

        // dd($validColumns);

        return $validColumns;
    }


    private function generateSlug($string)
	{
	    $string = preg_replace('~[^\pL\d]+~u', '-', $string);
	    $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
	    $string = preg_replace('~[^-\w]+~', '', $string);
	    $string = trim($string, '-');
	    $string = preg_replace('~-+~', '-', $string);
	    $string = strtolower($string);
	    
	    return !empty($string) ? $string : false;
	}
}
