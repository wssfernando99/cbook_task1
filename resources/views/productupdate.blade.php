<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action={{ url('product/'.$product->id) }}>
        @method('PUT')
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
      <form method="POST" action="{{url('product/'.$product->id) }}">
        @csrf
        @method('DELETE') 
        <button type="submit" >Delete</button>
      </form> 
</body>
</html>
