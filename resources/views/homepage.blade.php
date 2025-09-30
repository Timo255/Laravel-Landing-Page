<!DOCTYPE html>
<html lang="en">
<head>
  @include('css.css')
  @livewireStyles
</head>
<body>

    <!-- nav section -->
    @include('include.NavItem')

    <!--- product section -->
    @include('include.Product')

    <!-- Feature section -->
    @include('include.Feature')
    
    <!-- About section -->
    @include('include.About')

    <!-- Testimonial section -->
    @include('include.Testimonial')

    @livewireScripts
</body>
</html>
