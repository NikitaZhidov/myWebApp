<template>
   <nav>
      <ul>
         <li><a href="#">Home</a></li>
         <li><a href="#">Blog</a></li>
         <li><a href="#">About us</a></li>
         <li><a href="#">Works</a></li>
         <li><a href="#">Social</a></li>
      </ul>
   </nav>
</template>

<style scoped>
nav {
   font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}
ul {
   list-style: none;
   display: flex;
}

a {
   color: #000;
   text-decoration: none;
}

li {
   margin: 0px 20px 0px 0px;
}

li:last-child {
   margin: 0;
}
</style>