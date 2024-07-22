<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="display: flex; flex-direction: column; align-items: center; justify-content: center;">Create new product</h1><br><br>
   <div>
        @if($errors->any())
        <ul>@foreach ($errors->all() as $error)
            <li>{{$error}}</li>        
        @endforeach
        </ul>
        @endif
   </div>
    <form method="post" action="{{route('product.store')}}" 
    style="display: flex; flex-direction: column; align-items: center; justify-content: center;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s; padding: 2px 16px; border-radius: 5px;">
        @csrf
        @method('post')
        <div>
            <label>name</label>:
            <input type="text" name="name" placeholder="name" />
        </div><br><br>

        <div>
            <label>Quantity</label>:
            <input type="text" name="qty" placeholder="Quantity" />
        </div><br><br>

        <div>
            <label>Price</label>:
            <input type="text" name="price" placeholder="price" />
        </div><br><br>

        <div>
            <label>description</label>:
            <input type="text" name="description" placeholder="Leave your Description" />
        </div><br><br>

        <div>
            <input type="submit" value="save a new product" />
        </div><br><br>
    </form>
</body>
</html>