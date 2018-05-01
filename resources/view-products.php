<!-- 
*  @author Ferdy Anata, Zhengjie Huang
 * Created on: 22/04/2018
 * Description: When users click on a product from the menu, the information will show on the top right hand of the web page.
 *
-->

<!-- display product menu
-->

<?php include_once 'config.php' ?>
<?php include_once 'includes/header.php' ?>

<p>This is the view-products file</p>

<!-- @desc Using target attribute allows us to send data from any submit input to another page,
    in one page. 
    'index-get-products' is a name that is set in index.php that refers to the frame we're sending
    data to. 
    Source: https://css-tricks.com/snippets/html/post-data-to-an-iframe/
    -->
<form action="get-products.php" method="GET" target="index-get-products">
<div id="container">
        <div id="menu">
            <ul id="menuBar">
                <li class="mainLinks">
                    <img href="#" src= "../assets/img/fresh-food.png">
                    <ul class="sub">
                        <li value="3002" onclick="javascript:displayDetails(this.value)"><a href="#">T'Bone Steak</a></li>
      
                        <li>
                            <a href="#">Chedder Cheese</a>
                            <ul class="subSub">
                                <li value="3000" onclick="javascript:displayDetails(this.value)"><a href="#">500 Gram </a></li>
                                <li value="3001" onclick="javascript:displayDetails(this.value)"><a href="#">1000 Gram </a></li>
                            </ul>
                        </li>
                        <li value="3003" onclick="javascript:displayDetails(this.value)"><a href="#">Navel Oranges</a></li>

                        <li value="3004" onclick="javascript:displayDetails(this.value)"><a href="#">Bananas</a></li>

                        <li value="3006" onclick="javascript:displayDetails(this.value)"><a href="#">Grapes</a></li>

                        <li value="3007" onclick="javascript:displayDetails(this.value)"><a href="#">Apples</a></li>

                        <li value="3005" onclick="javascript:displayDetails(this.value)"><a href="#">Peaches</a></li>
                    
                    </ul>

                </li>

                 <li class="mainLinks">
                    <img href="#" src="../assets/img/frozen-food.png">
            
                    <ul id="sub00" class="sub">
                    
                        <li><a href="#">Sea Food</a>

                            <ul id="sub01" class="subSub">
                    
                                <li value="1001" onclick="javascript:displayDetails(this.value)"><a href="#">Fish Fingers(large)</a></li>
                            
                                <li value="1000" onclick="javascript:displayDetails(this.value)"><a href="#">Fish Fingers(small)</a></li>
                            
                                <li value="1003" onclick="javascript:displayDetails(this.value)"><a href="#">Shelled Prawns</a></li>		

                            </ul>
                        </li>
                        <li><a href="#">Milk Products</a>
                    
                            <ul id="sub02" class="subSub">
                    
                                <li value="1004" onclick="javascript:displayDetails(this.value)"><a href="#">Tub Ice Cream(1L)</a></li>
                            
                                <li value="1005" onclick="javascript:displayDetails(this.value)"><a href="#">Tub Ice Cream(2L)</a></li>		

                            </ul>
                    
                        </li>
                        
                        <li><a href="#">Other</a>
                    
                            <ul id="sub03" class="subSub">
                        
                                <li value="1002" onclick="javascript:displayDetails(this.value)"><a href="#">Hamburger Patties</a></li>
                            
                            </ul>
                        
                        </li>
                    
                    </ul>                    
                </li>
        

                <li class="mainLinks">
                    <img href="#" src="../assets/img/beverages.png">

                    <ul class="sub">

                        <li><a href="#">Coffee</a>

                            <ul class="subSub">

                                <li value="4003" onclick="javascript:displayDetails(this.value)"><a href="#">200 Gram </a></li>

                                <li value="4004" onclick="javascript:displayDetails(this.value)"><a href="#">500 Gram </a></li>

                            </ul>
                        
                        </li>
                                                
                        <li><a href="#">Earl Grey Tea Bags</a>

                            <ul class="subSub">

                                <li value="4000" onclick="javascript:displayDetails(this.value)"><a href="#">Pack 25 </a></li>

                                <li value="4001" onclick="javascript:displayDetails(this.value)"><a href="#">Pack 100 </a></li>

                                <li value="4002" onclick="javascript:displayDetails(this.value)"><a href="#">Pack 200 </a></li>

                            </ul>
                        
                        </li>
                        
                        <li value="4005" onclick="javascript:displayDetails(this.value)"><a href="#">Chocolate bar</a></li>
                    
                    </ul>

                </li>
                
                <li class="mainLinks">
                    <img href="#" src="../assets/img/home-health.png" >
                
                    <ul class="sub">

                        <li value="2002" onclick="javascript:displayDetails(this.value)"><a href="#">Bath Soap</a></li>

                        <li><a href="#">Panadol</a>

                            <ul class="subSub">

                                <li value="2000" onclick="javascript:displayDetails(this.value)"><a href="#">Pack 24 </a></li>

                                <li value="2001" onclick="javascript:displayDetails(this.value)"><a href="#">Bottle 50 </a></li>

                            </ul>
                        
                        </li>

                        <li value="2005" onclick="javascript:displayDetails(this.value)"><a href="#">Washing powder</a></li>
                                                
                        <li ><a href="#">Garbage Bags</a>

                            <ul class="subSub">

                                <li value="2003" onclick="javascript:displayDetails(this.value)"><a href="#">small(pack10) </a></li>

                                <li value="2004" onclick="javascript:displayDetails(this.value)"><a href="#">large(pack50) </a></li>

                            </ul>
                        </li>
                        
                        <li value="2006" onclick="javascript:displayDetails(this.value)"><a href="#">Laundry Bleach</a></li>
                    
                    </ul>

                </li>

                <li class="mainLinks">
                    <img href="#" src="../assets/img/pet-food.png" > 
                
                    <ul id="sub09" class="sub">
                    
                        <li value="5002" onclick="javascript:displayDetails(this.value)"><a href="#">Bird Food</a></li>
                        
                        <li value="5003" onclick="javascript:displayDetails(this.value)"><a href="#">Cat Food</a></li>
                        
                        <li><a href="#">Dry Dog Food</a>
                            <ul class="subSub">

                                <li value="5001" onclick="javascript:displayDetails(this.value)"><a href="#"> 1 kg Pack </a></li>

                                <li value="5000" onclick="javascript:displayDetails(this.value)"><a href="#"> 5 kg Pack </a></li>

                            </ul>
                        </li>		
                    
                        <li value="5004" onclick="javascript:displayDetails(this.value)"><a href="#">Fish Food</a></li>

                    </ul>
                
                </li>
        
            </ul>
        
            </div>  
    </div>
</form>

<?php include_once 'includes/footer.php' ?>