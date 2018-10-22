<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware( 'auth' );
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = DB::table( 'operator' )->get();
        $weapons = DB::table( 'weapon' )->get();
        $posts = DB::table( 'posts' )->get();

        return view( 'home', ['operators' => $operators, 'weapons' => $weapons, 'posts' => $posts] );

    }

    /**
     * @param request
     */
    public function feedback(Request $request) {

        return view( 'pages.contact' );

    }

    /**
     * @param request
     */
    public function postFeedback(Request $request) {
        if ($request->isMethod('post')) {

            $postData = array(
                'name'          => Input::get('name'),
                'email'         => Input::get('email'),
                'suggestion'    => Input::get('suggestion'),
            );
    
            $rules = array(
                'email'    => 'required|email', // make sure the email is an actual email
            );
        
            // run the validation rules on the inputs from the form
            $validator = Validator::make( $postData, $rules );
        
            // if the validator fails, redirect back to the form
            if ($validator->fails()) {
                return Redirect::to( 'feedback' )
                    ->withErrors( $validator ) // send back all errors to the login form
                    ->withInput( ); // send back the input (not the password) so that we can repopulate the form
            } else {
        
                // create our user data for the authentication
                $userdata = array(
                    'name'          => Input::get( 'name' ),
                    'email'         => Input::get( 'email' ),
                    'suggestion'    => Input::get( 'password' )
                );
    
                DB::table('suggestion')->insert([
                    [
                        'name'          => $userdata['name'],
                        'email'         => $userdata['email'],
                        'suggestion'    => $userdata['suggestion'],
                    ]
                ]);
        
                $message = 'Thank you for your feedback!';
                return Redirect::to( 'home', ['message' => $message]);
            }
        }
    }

    public function view_operators()
    {
        $operators = DB::table( 'operator' )->get();

        return view( 'pages.all-operators', ['operators' => $operators] );
    }

    /**
     * @param integer $id
     */
    public function operator($id)
    {
        $operator = DB::table( 'operator' )->where('id', $id)->get();

        $operatorCollection = $operator;

        $weaponIds = array(
            $operator[0]->first_weapon_id,
            $operator[0]->second_weapon_id,
            $operator[0]->third_weapon_id,
            $operator[0]->fourth_weapon_id,
            $operator[0]->fifth_weapon_id
        );

        $weapons = [];

        foreach( $weaponIds as $weapon ){
            array_push( $weapons, DB::table( 'weapon' )->where('id', $weapon)->get()->toArray() );
        }

        $operator = $operator[0];

        return view( 'pages.operator', ['operator' => $operator, 'operatorCollection' => $operatorCollection, 'weapons' => $weapons] );
    }

    public function view_weapons()
    {
        $weapons = DB::table( 'weapon' )->get();

        return view( 'pages.all-weapons', ['weapons' => $weapons] );
    }

    /**
     * @param string $id
     */
    public function weapon($id)
    {
        $weapon = DB::table( 'weapon' )->where('id', $id)->get();

        return view( 'pages.weapon', ['weapon' => $weapon] );
    }

    /**
     * 
     */
    public function posts()
    {
        $posts = DB::table( 'posts' )->get();

        return view( 'admin.posts', ['posts' => $posts] );
    }

    /**
     * 
     */
    public function createPost( Request $request )
    {

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        //checking if file exsists
        if(file_exists(public_path("/images/posts/$imageName"))){ unlink(public_path("/images/posts/$imageName")); };
        $image->move(public_path('/images/posts'), $imageName);

        // create our operator data for the authentication
        $postData = array(
            'title' => Input::get('title'),
            'content' => Input::get('content'),
            'slug' => Input::get('slug'),
            'image' => $imageName,
            'type' => Input::get('type'),
            'category_id' => Input::get('category_id'),
            'author_id' => Input::get('author_id')
        );

        DB::table('posts')->insert([
            [
                'title' => $postData['title'],
                'content' => $postData['content'],
                'slug' => $postData['slug'],
                'image' => $postData['image'],
                'type' => $postData['type'],
                'category_ID' => $postData['category_id'],
                'author_ID' => $postData['author_id'],
            ]
        ]);

        // return Redirect::to('/tartarus/admin/operators');
        return back();
    }

    /**
     * Login function
     */
    public function login()
    {
        // validate the info, create rules for the inputs
    $rules = array(
        'email'    => 'required|email', // make sure the email is an actual email
        'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make( Input::all(), $rules );

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
        return Redirect::to( 'login' )
            ->withErrors( $validator ) // send back all errors to the login form
            ->withInput( Input::except( 'password' ) ); // send back the input (not the password) so that we can repopulate the form
    } else {

        // create our user data for the authentication
        $userdata = array(
            'email'     => Input::get( 'email' ),
            'password'  => Input::get( 'password' )
        );

        // attempt to do the login
        if ( Auth::attempt( $userdata ) ) {

            // validation successful!
            // redirect them to the secure section or whatever
            // return Redirect::to('secure');
            // for now we'll just echo success (even though echoing in a controller is bad)
            echo 'SUCCESS!';
            return Redirect::to( 'admin' );

        } else {        

            // validation not successful, send back to form 
            return Redirect::to( 'login' );

        }

    }
    }

    public function admin() 
    {
        if( ! Auth::check() ){
            return view( 'tartarus' );
        } else {
            $operators = DB::table( 'operator' )->get();
            $weapons = DB::table( 'weapon' )->get();

            return view( 'admin.dashboard', ['operators' => $operators, 'weapons' => $weapons] );
        }
    }

    public function logout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('/'); // redirect the user to the home screen
    }

    // Operator Specific

    public function operators() 
    {
        $operators = DB::table( 'operator' )->get();
        $weapons = DB::table( 'weapon' )->get();
        $select = [];

        foreach($weapons as $weapon) {
            array_push($select, $weapon);
        }

        return view( 'admin.operators', ['operators' => $operators, 'weapons' => $select] );
    }

    /**
     * 
     */
    public function editOperator(Request $request, $id ) 
    {
        $operator = DB::table( 'operator' )->where('id', $id)->get();

        if ($request->isMethod('post')) {
            DB::table('operator')
            ->where('id', $id)
            ->update(['votes' => 1]);
        }

        return view( 'admin.editOperator', ['operator' => $operator] );

    }

    public function addOperator(Request $request) 
    {

        // Check if an image with the same name exists (it shouldn't but hey, who knows right?)
        // If it does, delete it
        // Upload images to correct directorys
      
        $fullimage = $request->file('fullimage');
        $fullimageName = $fullimage->getClientOriginalName();
        //checking if file exsists
        if(file_exists(public_path("/images/operators/$fullimageName"))){ unlink(public_path("/images/operators/$fullimageName")); };
        $fullimage->move(public_path('/images/operators'), $fullimageName);

        $halfimage = $request->file('halfimage');
        $halfimageName = $halfimage->getClientOriginalName();
        //checking if file exsists
        if(file_exists(public_path("/images/operators/$halfimageName"))){ unlink(public_path("/images/operators/$halfimageName")); };
        $halfimage->move(public_path('/images/operators/half'), $halfimageName);
        
        $icon = $request->file('icon');
        $iconName = $icon->getClientOriginalName();
        //checking if file exsists
        if(file_exists(public_path("/images/operators/$iconName"))){ unlink(public_path("/images/operators/$iconName")); };
        $icon->move(public_path('/images/operators/icons'), $iconName);

        $abilityImage = $request->file('ability-image');
        $abilityName = $abilityImage->getClientOriginalName();
        //checking if file exsists
        if(file_exists(public_path("/images/operators/$abilityName"))){ unlink(public_path("/images/operators/$abilityName")); };
        $abilityImage->move(public_path('/images/operators/abilities'), $abilityName);

        // create our operator data for the authentication
        $operatorData = array(
            'name'     => Input::get('name'),
            'fullname'  => Input::get('fullname'),
            'position'  => Input::get('position'),
            'fullimage'  => $fullimageName,
            'halfimage'  => $halfimageName,
            'icon'  => $iconName,
            'dob'  => Input::get('dob'),
            'description'  => Input::get('description'),
            'birthplace' => Input::get('birthplace'),
            'ctu'  => Input::get('ctu'),
            'ability-name'  => Input::get('ability-name'),
            'ability-description' => Input::get('ability-description'),
            'ability-image' => $abilityName,
            'weapon-1' => Input::get('weapon-1'),
            'weapon-2' => Input::get('weapon-2'),
            'weapon-3' => Input::get('weapon-3'),
            'weapon-4' => Input::get('weapon-4'),
            'weapon-5' => Input::get('weapon-5'),
            'gadget-1' => Input::get('gadget-1'),
            'gadget-2' => Input::get('gadget-2')
        );

        DB::table('operator')->insert([
            [
                'name' => $operatorData['name'],
                'fullname' => $operatorData['fullname'],
                'position' => $operatorData['position'],
                'fullimage' => $operatorData['fullimage'],
                'halfimage' => $operatorData['halfimage'],
                'icon' => $operatorData['icon'],
                'dob' => $operatorData['dob'],
                'description' => $operatorData['description'],
                'birthplace' => $operatorData['birthplace'],
                'ctu' => $operatorData['ctu'],
                'ability_name' => $operatorData['ability-name'],
                'ability_description' => $operatorData['ability-description'],
                'ability_image' => $operatorData['ability-image'],
                'first_weapon_id' => $operatorData['weapon-1'],
                'second_weapon_id' => $operatorData['weapon-2'],
                'third_weapon_id' => $operatorData['weapon-3'],
                'fourth_weapon_id' => $operatorData['weapon-4'],
                'fifth_weapon_id' => $operatorData['weapon-5'],
                'gadget_one' => $operatorData['gadget-1'],
                'gadget_two' => $operatorData['gadget-2']
                ]
        ]);

        // return Redirect::to('/tartarus/admin/operators');
        return back();
    }

    public function weapons() 
    {
        $weapons = DB::table( 'weapon' )->get();

        return view( 'admin.weapons', ['weapons' => $weapons] );
    }

    public function addWeapons( Request $request ) 
    {

        // Upload images to correct directorys
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        //checking if file exsists
        if(file_exists(public_path("/images/operators/weapons/$imageName"))){ unlink(public_path("/images/operators/weapons/$imageName")); };
        $image->move(public_path('/images/operators/weapons'), $imageName);
        
        // create our weapons data for the authentication
        $weaponData = array(
            'name'     => Input::get('name'),
            'image'  => $imageName,
            'description'  => Input::get('description'),
            'damage'  => Input::get('damage'),
            'magazine'  => Input::get('magazine'),
            'rateOfFire'  => Input::get('rate-of-fire'),
            'mobility'  => Input::get('mobility'),
            'first_sight'  => Input::get('first-sight'),
            'second_sight'  => Input::get('second-sight'),
            'third_sight'  => Input::get('third-sight'),
            'fourth_sight'  => Input::get('fourth-sight'),
            'first_barrel'  => Input::get('first-barrel'),
            'second_barrel'  => Input::get('second-barrel'),
            'third_barrel'  => Input::get('third-barrel'),
            'fourth_barrel'  => Input::get('fourth-barrel'),
            'first_grip'  => Input::get('first-grip'),
            'second_grip'  => Input::get('second-grip'),
            'underbarrel'  => Input::get('underbarrel'),
        );

        DB::table('weapon')->insert([
            [
            'name'     => $weaponData['name'],
            'image'  => $weaponData['image'],
            'description'  => $weaponData['description'],
            'damage'  => $weaponData['damage'],
            'magazine'  => $weaponData['magazine'],
            'rateOfFire'  => $weaponData['rateOfFire'],
            'mobility'  => $weaponData['mobility'],
            'first-sight'  => $weaponData['first_sight'],
            'second-sight'  => $weaponData['second_sight'],
            'third-sight'  => $weaponData['third_sight'],
            'fourth-sight'  => $weaponData['fourth_sight'],
            'first-barrel'  => $weaponData['first_barrel'],
            'second-barrel'  => $weaponData['second_barrel'],
            'third-barrel'  => $weaponData['third_barrel'],
            'fourth-barrel'  => $weaponData['fourth_barrel'],
            'first-grip'  => $weaponData['first_grip'],
            'second-grip'  => $weaponData['second_grip'],
            'underbarrel'  => $weaponData['underbarrel'],
            ]
        ]);
    }

    /**
     * 
     */
    public function editWeapon(Request $request, $id ) 
    {
        $weapon = DB::table( 'weapon' )->where('id', $id)->get();

        if ($request->isMethod('post')) {

            // Upload images to correct directorys
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            //checking if file exsists
            if(file_exists(public_path("/images/operators/weapons/$imageName"))){ unlink(public_path("/images/operators/weapons/$imageName")); };
            $image->move(public_path('/images/operators/weapons'), $imageName);

            $weaponData = array(
                'name'     => Input::get('name'),
                'image'  => $imageName,
                'description'  => Input::get('description'),
                'damage'  => Input::get('damage'),
                'magazine'  => Input::get('magazine'),
                'rateOfFire'  => Input::get('rate-of-fire'),
                'mobility'  => Input::get('mobility'),
                'first_sight'  => Input::get('first-sight'),
                'second_sight'  => Input::get('second-sight'),
                'third_sight'  => Input::get('third-sight'),
                'fourth_sight'  => Input::get('fourth-sight'),
                'first_barrel'  => Input::get('first-barrel'),
                'second_barrel'  => Input::get('second-barrel'),
                'third_barrel'  => Input::get('third-barrel'),
                'fourth_barrel'  => Input::get('fourth-barrel'),
                'first_grip'  => Input::get('first-grip'),
                'second_grip'  => Input::get('second-grip'),
                'underbarrel'  => Input::get('underbarrel'),
            );

            DB::table('weapon')
            ->where('id', $id)
            ->update([
                [
                'name'     => $weaponData['name'],
                'image'  => $weaponData['image'],
                'description'  => $weaponData['description'],
                'damage'  => $weaponData['damage'],
                'magazine'  => $weaponData['magazine'],
                'rateOfFire'  => $weaponData['rateOfFire'],
                'mobility'  => $weaponData['mobility'],
                'first-sight'  => $weaponData['first_sight'],
                'second-sight'  => $weaponData['second_sight'],
                'third-sight'  => $weaponData['third_sight'],
                'fourth-sight'  => $weaponData['fourth_sight'],
                'first-barrel'  => $weaponData['first_barrel'],
                'second-barrel'  => $weaponData['second_barrel'],
                'third-barrel'  => $weaponData['third_barrel'],
                'fourth-barrel'  => $weaponData['fourth_barrel'],
                'first-grip'  => $weaponData['first_grip'],
                'second-grip'  => $weaponData['second_grip'],
                'underbarrel'  => $weaponData['underbarrel'],
                ]
            ]);
        }

        return view( 'admin.editWeapon', ['weapon' => $weapon, 'id' => $id] );

    }

    public function suggestions() {

        $suggestions = DB::table( 'suggestion' )->get();

        return view( 'admin.suggestions', ['suggestions' => $suggestions] );
    }
}
