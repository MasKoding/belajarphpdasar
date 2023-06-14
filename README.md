```php
public function myFunction($id){
         $guest = Guest::findOrFail($id);
      
      
         return view('guest.edit',compact('guest'));
       
      
      }
```