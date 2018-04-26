<!--
* @author Ferdy Anata
* Created on: 22/04/2018
* Description: The welcome file that divides the frames into three
-->

<?php include_once 'resources/config.php' ?>
<?php include_once 'resources/includes/header.php' ?>

<div class="container" id="leftFrame">
    <p>This is left frame</p>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
        <div id="menu">
            <ul id="menuBar">
                <li class="mainLinks">
                    <img href="#" src= "assets/img/fresh-food.png">
                    <ul class="sub">
                        <li><input type="submit" name="t_bone_steak" value="T'Bone Steak"></li>    
                        <li>
                            <a href="#">Chedder Cheese</a>
                            <ul class="subSub">
                                <li><a href="#">500 Gram </a></li>
                                <li><a href="#">1000 Gram </a></li>
                            </ul>
                        </li>
                        <li><a href="#">Navel Oranges</a></li>

                        <li><a href="#">Bananas</a></li>

                        <li><a href="#">Grapes</a></li>

                        <li><a href="#">Apples</a></li>

                        <li><a href="#">Peaches</a></li>
                    
                    </ul>

                </li>

                 <li class="mainLinks">
                    <img href="#" src="assets/img/frozen-food.png">
            
                    <ul id="sub00" class="sub">
                    
                        <li><a href="#">Sea Food</a>

                            <ul id="sub01" class="subSub">
                    
                                <li><a href="#">Fish Fingers(large)</a></li>
                            
                                <li><a href="#">Fish Fingers(small)</a></li>
                            
                                <li><a href="#">Shelled Prawns</a></li>		

                            </ul>
                        </li>
                        <li><a href="#">Milk Products</a>
                    
                            <ul id="sub02" class="subSub">
                    
                                <li><a href="#">Tub Ice Cream(1L)</a></li>
                            
                                <li><a href="#">Tub Ice Cream(2L)</a></li>		

                            </ul>
                    
                        </li>
                        
                        <li><a href="#">Other</a>
                    
                            <ul id="sub03" class="subSub">
                        
                                <li><a href="#">Hamburger Patties</a></li>
                            
                            </ul>
                        
                        </li>
                    
                    </ul>                    
                </li>
        

                <li class="mainLinks">
                    <img href="#" src="assets/img/beverages.png">

                    <ul class="sub">

                        <li><a href="#">Coffee</a>

                            <ul class="subSub">

                                <li><a href="#">200 Gram </a></li>

                                <li><a href="#">500 Gram </a></li>

                            </ul>
                        
                        </li>
                                                
                        <li><a href="#">Earl Grey Tea Bags</a>

                            <ul class="subSub">

                                <li><a href="#">Pack 25 </a></li>

                                <li><a href="#">Pack 100 </a></li>

                                <li><a href="#">Pack 200 </a></li>

                            </ul>
                        
                        </li>
                        
                        <li><a href="#">Chocolate bar</a></li>
                    
                    </ul>

                </li>
                
                <li class="mainLinks">
                    <img href="#" src="assets/img/home-health.png" >
                
                    <ul class="sub">

                        <li><a href="#">Bath Soap</a></li>

                        <li><a href="#">Panadol</a>

                            <ul class="subSub">

                                <li><a href="#">Pack 24 </a></li>

                                <li><a href="#">Bottle 50 </a></li>

                            </ul>
                        
                        </li>

                        <li><a href="#">Washing powder</a></li>
                                                
                        <li><a href="#">Garbage Bags</a>

                            <ul class="subSub">

                                <li><a href="#">small(pack10) </a></li>

                                <li><a href="#">large(pack50) </a></li>

                            </ul>
                        
                        </li>
                        
                        <li><a href="#">Laundry Bleach</a></li>
                    
                    </ul>

                </li>

                <li class="mainLinks">
                    <img href="#" src="assets/img/pet-food.png" > 
                
                    <ul id="sub09" class="sub">
                    
                        <li><a href="#">Bird Food</a></li>
                        
                        <li><a href="#">Cat Food</a></li>
                        
                        <li><a href="#">Dry Dog Food</a>
                            <ul class="subSub">

                                <li><a href="#"> 1 kg Pack </a></li>

                                <li><a href="#"> 5 kg Pack </a></li>

                            </ul>
                        </li>		
                    
                        <li><a href="#">Fish Food</a></li>

                    </ul>
                
                </li>
        
            </ul>
        
            </div>  
    </div>
</form>
</div>

<div class="container" id="topRightFrame" style="float: right;">
    <p>This is top right frame</p>
</div>

<div class="container" id="bottomRightFrame" style="float: right; margin-top: 20%;">
    <p>This is bottom right frame</p>
</div>


<?php include_once 'resources/includes/footer.php' ?>