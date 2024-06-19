<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <form method="POST" action={{ url('product') }}>
            @csrf
            <div >
              <label for="exampleInputCategory" class="form-label">Name</label>
              <input type="text"  name="name"/>
            </div>
            <div >
              <label for="exampleBrandname" class="form-label">Description</label>
              <input type="text"  name="description"/>
            <div >
              <label for="exampleName" class="form-label">Quantity</label>
              <input type="number" name="quantity"/>
            </div>
            
            <button type="submit" >Submit</button>
          </form>
    </body>
</html>
