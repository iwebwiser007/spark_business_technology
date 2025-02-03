<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Mail</title>
        <meta name="keywords" content="@yield('keywords')" />
        <meta name="description" content="@yield('description')" />
        <!-- Other common meta tags go here -->
        <!-- Common CSS Links -->
        <!-- <link rel="stylesheet" href="{{ asset('public/common.css') }}"> -->
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('public/web/favicon.ico') }}">
        
        <!-- Page-specific CSS Links -->
     
    </head>
    
    <body>
        <!-- main container start here... -->
        <main class="main-container">
          <table>
              <tbody>
                <tr>
                    
                    <td>Name</td>
                    <td>{{$name ?? ''}}</td>
                </tr>  
                <tr>
                    
                    <td>Email</td>
                    <td>{{$email ?? ''}}</td>
                </tr>  
                <tr>
                    
                    <td>Contact Number</td>
                    <td>{{$number ?? ''}}</td>
                </tr>  
                <tr>
                    
                    <td>Company</td>
                    <td>{{$company ?? ''}}</td>
                </tr>  
              </tbody>
          </table>
        </main>
    
      
    </body>
    <!-- Body Tag end here... -->
</html>