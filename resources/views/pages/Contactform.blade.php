 
  
  <body>
    @extends('dashboard')
    @section('content')
    <section id="registration" style=" height: 91vh; position: sticky;">
    
      <div class="container">
        <h1>Contact Form</h1>
        <form action="#" onsubmit="return validateForm()">
          <input type="text" class="input" name="name" id="name" placeholder="Name">
          <br><br>
          <input type="email" class="input" name="email" id="email" placeholder="Email Address">
          <br><br>
          <input type="text" class="input" name="country" id="country" placeholder="Country">
          <br><br>
          <input type="tel" class="input" name="phone" id="phone" placeholder="123-456-789">
          <br><br>
          <div class="row">
            <input type="password" class="input" name="password" id="password" placeholder="Password">
            <i class="fa-regular fa-eye-slash"></i>
          </div>
          <label for="checkbox">
            <input type="checkbox" id="checkbox"> I accept terms and conditions.
          </label>
          <button type="submit">more </button>
           <div id="error-message" class="error-message"></div>
        </form>
      </div>
    </section>
  
     @endsection
      </body>