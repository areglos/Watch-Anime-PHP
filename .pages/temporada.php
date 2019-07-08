<!DOCTYPE HTML>  
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Meu CSS -->
    <link href="../css/main.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,700|Shrikhand');

$nav-item-bg-clr: #2269BB;
$nav-item-bg-clr-hvr: #1E1E1E;
$nav-item-txt-clr: white;
$ts: 0.3s;
$td: 0.05s;

* {
  box-sizing: border-box;
}

body {
  font-family: 'Open Sans', sans-serif;
  font-size: 1rem;
  line-height: 1.4;
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/225363/ales-krivec-38565-unsplash.jpg);
  background-size: cover;
  
  @media (min-width: 450px) {
    font-size: 1.25rem;
  }
}

.page-header {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  overflow: visible;
  padding: 1rem;
  z-index: 200;
}

.page-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 1rem;
  min-height: 100vh;
  text-align: center;
  color: white;
}

.page-tagline {
  font-size: 0.75rem;
  font-weight: 700;
  z-index: 100;
  
  a {
    color: darken($nav-item-bg-clr, 20%);
    text-decoration: none;
  }
}

.page-title {
  margin-bottom: 1.5rem;
  font-family: 'Shrikhand', serif;
  font-size: 2rem;
  line-height: 1.2;
  
  @media (min-width: 450px) {
    font-size: 3rem;
  }
}

nav {
  display: flex;
  position: absolute;
  top: 0;
  left: 0;
  padding: 3rem 1rem 1rem;
  width: 100vw;
  min-height: 100vh;
  text-align: center;
  background-color: white;
  opacity: 0;
  transform: translateY(-100%);
  transition: 
    opacity $ts * 1.5 $ts * 1.5 ease,
    transform 0s $ts * 4 ;
}

.menu ol {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 1rem;
  width: 100%;
  
  @media (min-width: 820px) {
    grid-template-columns: repeat(4, 1fr);
  }
  
  li {
    display: grid;
    grid-column: span 1;
    grid-gap: 1rem;
    overflow: hidden;
  }
  
  a {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    width: 100%;
    height: 100%;
    font-size: 1.25rem;
    text-decoration: none;
    color: $nav-item-bg-clr;
    background-color: $nav-item-bg-clr;
    border-radius: 2px;
    
    @media (min-width: 450px) {
      font-size: 1.75rem;
    }
  }
}

.menu > ol > li:nth-child(n + 3) {
  grid-column: span 2;
}

.menu .sub-menu {
  padding: 0;
  grid-template-columns: repeat(2, 1fr);
  
  @media (min-width: 500px) {
    grid-template-columns: repeat(3, 1fr);
  }
  
  li a {
    font-size: 0.85rem;
    color: darken($nav-item-bg-clr, 15%);
    background-color: darken($nav-item-bg-clr, 15%);
    
    @media (min-width: 450px) {
      font-size: 1rem;
    }
  }
  
  li:nth-child(3n) {
    grid-column: span 2;

    @media (min-width: 500px) {
      grid-column: span 1;
    }
  }
}

.menu-toggle {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-gap: 2px;
  position: relative;
  cursor: pointer;
  width: 28px;
  height: 22px;
  z-index: 100;
  
  &:before {
    content: '×';
    position: absolute;
    top: 0;
    left: 0;
    font-size: 2.4rem;
    line-height: 0.4;
    color: darken($nav-item-bg-clr, 20%);
    z-index: 2;
    opacity: 0;
    transition: opacity $ts ease;
  }
  
  span {
    display: block;
    position: relative;
    width: 100%;
    height: 2px;
    background-color: darken($nav-item-bg-clr, 20%);
    border-radius: 2px;
    transition: transform $ts ease;
    transform-origin: 100% 100%;
    
    @for $i from 1 through 6 {
      &:nth-child(#{$i}) {
        transition-delay: $ts + ($td * $i);
      }
    }
    
    &:nth-child(1),
    &:nth-child(2) {
      grid-column: span 3;
    }
        
    &:nth-child(3),
    &:nth-child(6) {
      grid-column: span 2;
    }
  
    &:nth-child(4),
    &:nth-child(5) {
      grid-column: span 4;
    }
  }
}

#menu-toggle-input {
  display: none;
  
  &:checked ~ .menu-toggle {
    span {
      transform: scaleX(0);
      
      @for $i from 1 through 6 {
        &:nth-child(#{$i}) {
          transition-delay: $td * $i;
        }
      }
    }
    
    &:before {
      opacity: 1;
      transition-delay: $ts * 2.5;
    }
  }
  
  &:checked ~ nav {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 0s;
    
    a {
      color: $nav-item-txt-clr;
      transform: translate(0, 0);
    }
    
    @for $i from 1 through 5 {
      > ol > li:nth-child(#{$i}) > a {
        transition: 
          color $ts ($ts * 2.75),
          transform $ts ($ts + $td * $i) ease;
      }

      .sub-menu > li:nth-child(#{$i}) > a {
        transition: 
          color $ts ($ts * 2.75),
          transform $ts ($ts * 1.5 + $td * $i) ease;
      }
    }
  }
}

@for $i from 1 through 5 {
  .menu > ol > li:nth-child(#{$i}) > a {
    transform: translate(calc(-100% - 12px), 0);
    transition: 
      color $ts,
      transform $ts ($ts / 2 + $td * $i) ease;
  }
  
  .sub-menu > li:nth-child(#{$i}) > a {
    transform: translate(0, calc(-100% - 12px));
    transition: 
      color $ts,
      transform $ts ($ts / 2 + $td * $i) ease;
  }
}
    </style>
    
</head>
<body style="background-image: url('../imagens/.jpg'); background-size:cover;">
    
    <section>
      
        
        <header class="page-header">
          <input id="menu-toggle-input" type="checkbox" />
          <label class="menu-toggle" for="menu-toggle-input">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </label>

  <div class="page-tagline">
    <a href="https://codepen.io/challenges" target="_blank">#CodePenChallenge</a>
  </div>

  <nav class="menu">
    <ol>
      <li class="menu-item"><a href="#0">Home</a></li>
      <li class="menu-item"><a href="#0">About</a></li>
      <li class="menu-item">
        <a href="#0">Widgets</a>
        <ol class="sub-menu">
          <li class="menu-item"><a href="#0">Big Widgets</a></li>
          <li class="menu-item"><a href="#0">Bigger Widgets</a></li>
          <li class="menu-item"><a href="#0">Huge Widgets</a></li>
        </ol>
      </li>
      <li class="menu-item">
        <a href="#0">Kabobs</a>
        <ol class="sub-menu">
          <li class="menu-item"><a href="#0">Shishkabobs</a></li>
          <li class="menu-item"><a href="#0">BBQ kabobs</a></li>
          <li class="menu-item"><a href="#0">Summer kabobs</a></li>
        </ol>
      </li>
      <li class="menu-item"><a href="#0">Contact</a></li>
    </ol>
  </nav>
</header>

<section class="page-content">
  <h1 class="page-title">CSS Grid Menu Panels</h1>
  <p>Click the toggle in the top left corner to see it in action. Photo by Ales Krivec on Unsplash</p>
</section>
        
        
    </section>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>