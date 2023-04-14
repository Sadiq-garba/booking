<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\booking;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */



     public function __construct()
     {
        $this->middleware('auth', ['except'=> ['show','index']]);
     }
 
    
     public function index()
     {

        return view('index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function book()
     {   
         
          return view('book');
     }


    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'consultant'=>'required',
            'type'=>'string|required',
            'time'=>'string|required',
            'date'=>'string|required',
            'price'=>'string|required',
            'service_provider'=>'string|required'
           
           // 'logo'=>'image|required|max:1999',
           
            
         ]);
       $post = new booking;

       $post->price = $request->input('price');
  
       $post->service_provider = $request->input('service_provider');
  
       $post->consultant = $request->input('consultant');
  
       $post->type = $request->input('type');

       $post->time = $request->input('time');
  
       $post->date = $request->input('date');
  
 
      if($post->save()){
       
       $request->session()->put('time',$request->input('time'));
       $request->session()->put('service_provider', $request->input('service_provider'));
       $request->session()->put('date', $request->input('date'));
       $request->session()->put('price', $request->input('price'));
       return  redirect('/proceed-to-pay');

      }

     

    }
    

    public function pay(){


         return view('charge');

    }


    
    public function payment(){


      return view('payment');

 }



    public function success(){

         return view('payment-successful');
    }

 /* 
       public function stripe(Request $request){


    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    // Create a token from the credit card details
    /*$token = \Stripe\Token::create([
      'card' => [
        'number' => $request->input('card_number'),
        'exp_month' => $request->input('exp_month'),
        'exp_year' => $request->input('exp_year'),
        'cvc' => $request->input('cvc'),
      ],
    ]);*/
  
     // Store the token ID in your database
    /* $user = Auth::user();
     $user->stripe_token = $token->id;
     $user->save();
     */
    // Charge the customer using the token
    // ...
  
   // return redirect('/')->with('success', 'Payment successful!');
      
     /* \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = \Stripe\Charge::create([
          'amount' => 1500,
          'currency' => 'usd',
          'description' => 'Example Charge',
          'source' =>  $request->input('stripeToken'),
       ]);
      
       \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

       $intent = \Stripe\PaymentIntent::create([
           'amount' => 999,
           'currency' => 'usd',
       ]);
   
       return view('charge', ['client_secret' => $intent->client_secret]);





       $book = new booking;
       $book->user_id = Auth::user()->id;
       $book->charge_id = $charge->id;
       $book->amount = $charge->amount;
       $book->save();
 
       redirect('/');


   }

   */




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        $user = User::find($id);
         return view('edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         /* $this->validate($request, [
           
             'name'=>'required|min:3|string',
             'email'=>'required',
             'bio' =>'string|nullable',
             'profile_pic'=>'image|mimes:jpeg,png,jpg,gif|max:500'
          ]);

           
          $user = User::find($id);
          $user->name = $request->input('name');
          $user->email = $request->input('email');
          $user->phone= $request->input('phone');
          $user->date_of_birth = $request->input('date_of_birth');
          $user->bio= $request->input('bio');

          $user->save();
        */

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
