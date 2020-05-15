<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/admin.html.twig */
class __TwigTemplate_08034dae4348d850150a70b3a96a797e7885e83977c984c26a65de2e776971fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AdminController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
    ";
        // line 7
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            var showed = false;
            \$(\"#allCarsTable\").DataTable({bSort:false, \"autoWidth\": true,\"pageLength\":10,
                'aoColumns': [
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSearchable: false, bSortable: false },
                ],
                \"info\":           true,
                \"bInfo\":           false,
                \"bLengthChange\": false,
                \"bFilter\": false,
                \"paging\":         true});
            \$(\"#allReservationTable\").DataTable({bSort:false, \"autoWidth\": true,
               'aoColumns': [

                   { bSortable: false },
                   { bSortable: false },
                   { bSortable: false },
                   { bSortable: false },
                   { bSortable: false },
                   { bSortable: false },
               ],
               \"bInfo\":           false,
               \"bLengthChange\": false,
               \"bFilter\": false,
               \"paging\":         true});
            \$(\"#allDoneCars\").DataTable({bSort:false, \"autoWidth\": true,
                'aoColumns': [

                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                ],
                \"bInfo\":           false,
                \"bLengthChange\": false,
                \"bFilter\": false,
                \"paging\":         true});
            function showTab(name)
            {
                \$(\".tabContent\").each(function (index) {
                    \$(this).fadeOut(500);
                })
                \$(name).delay(500).fadeIn(500);
            }
            \$(\"#dashboard\").on(\"click\",function () {
                    showTab(\"#dash\");
                //getClientNumber();
                //getCarNumbers();
                //getActiveRes();
                //getFavClient();
                //getAllRevenus();
            });
            \$(\"#carM\").on(\"click\",function () {

                showTab(\"#car\");
                //getCars();
                  
                  
                if(showed == false)
                {
                    \$(\"#carManagement\").slideDown(500);
                    showed = true;
                }
                else
                {
                    \$(\"#carManagement\").slideUp(500);
                    showed = false;
                }

            });

            \$(\"#addCar\").on(\"click\",function () {

                showTab(\"#addC\");

            });
            \$(\"#updateCar\").on(\"click\",function () {

                showTab(\"#UpdateC\");
                //getCarsToUpdate();

            });
            \$(\"#deleteCar\").on(\"click\",function () {

                showTab(\"#deleteC\");
                //getCarsToDelete();
            });

            \$(\"#Reservation\").on(\"click\",function () {

                showTab(\"#reserv\");
                //getReservation();

            });

            \$(\"#statusCar\").on(\"click\",function () {
               showTab(\"#StatusC\")
               //getDoneCars();
            });
            function addCar(form){
                var errorRate = 0;
                var name=\$(\"input[name='carName']\").val();
                var mark=\$(\"select[name='carMark']\").val();
                var model=\$(\"select[name='carModel']\").val();
                var year=\$(\"input[name='carYear']\").val();
                var color=\$(\"select[name='carColor']\").val();
                var fuel=\$(\"select[name='carFuel']\").val();
                var price=\$(\"input[name='carPrice']\").val();
                var carImage=\$(\"input[name='carPic']\").val();
                var seats=\$(\"select[name='carSeats']\").val();
                \$(\"#errorCarName\").html(\"\");
                \$(\"#errorCarMark\").html(\"\");
                \$(\"#errorCarModel\").html(\"\");
                \$(\"#errorCarYear\").html(\"\");
                \$(\"#errorCarColor\").html(\"\");
                \$(\"#errorCarFuel\").html(\"\");
                \$(\"#errorCarSeats\").html(\"\");
                \$(\"#errorCarPrice\").html(\"\");
                \$(\"#errorCarPic\").html(\"\");

                if(name == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarName\").html(\"Enter a Name\");

                }
                if(mark == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarMark\").html(\"Choose a Mark\");
                }
                if(model == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarModel\").html(\"Choose a Model\");

                }
                if(year == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarYear\").html(\"Enter year\");
                }
                if(color == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarColor\").html(\"Choose a color\");

                }
                if(seats == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarSeats\").html(\"Choose seats number\");
                }
                if(fuel == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarFuel\").html(\"Choose fuel type\");
                }
                if((price == \"\") || (price <= 0))
                {
                    errorRate++;
                    \$(\"#errorCarPrice\").html(\"Enter a price\");

                }
                if(carImage == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarPic\").html(\"Choose a picture\");
                }
                if(errorRate == 0)
                {
                    var formData = new FormData(form);
                    formData.append(\"fname\",\"addCar\");
                    \$.ajax({
                    type:\"POST\",
                    url:\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCar");
        echo "\",
                    data : formData,
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(data){
                        var result = JSON.stringify(data);
                        if(data.status == \"success\" && data.fileUploaded==true)
                        {
                            alert(\"Car Successfully Added\");
                            location.reload(true);
                        }
                        if(data.fileUploaded==false)
                        {
                            alert(\"There was something during uploading the image\");
                        }
                            
                        }
                    });
                }

            }

function getCarInfoToUpdate(id)
{
    \$.ajax({
        type:'GET',
        url:\"/\"+id+\"/car/info\",
        data:{},
        success:function(data)
        {
            var result = JSON.parse(JSON.stringify(data));
            \$.each(result,function(i,item){          
            \$(\"#updateName\").val(item.carName);
            \$(\"select[name='updateColor'] option[value='\"+item.carColor+\"']\").prop(\"selected\",\"selected\");
            \$(\"select[name='updateSeats'] option[value='\"+item.carSeats+\"']\").prop(\"selected\",\"selected\");
            \$(\"select[name='updateFuel'] option[value='\"+item.carFuel+\"']\").prop(\"selected\",\"selected\");
            \$(\"#updatePrice\").val(item.carPrice);
            \$(\"#updateYear\").val(item.carYear);
            \$(\"select[name='updateMark'] option[value='\"+item.carMark+\"']\").prop(\"selected\",\"selected\");
            getCarModelsUpdate(\$(\"#updateMark\").val(),item.carModel);

        });
        }
    });
}


function updateCar(form) {
    var formData = new FormData(form);
    formData.append(\"fname\",\"updateCar\");
    formData.append(\"idCar\", \$(\"select[name='carListUpdate']\").val());

\$.ajax({
        type:\"POST\",
        url:\"/PHP_Project/Controller/AdminController.php\",
        data : formData,
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {
             console.log(data);
            if(data == \"0\")
            {
                alert(\"Something went wrong\");
            }
            else if(data ==\"1\")
            {
                alert(\"Car Successfully Updated\");
                getCarsToUpdate();
                \$(\"#formUpdate\").html(\"\");
            }
            else
            {
                alert(\"Something went wrong\");
            }
        }
    });
}





function getCarModels(id)
{

    if(id == \"\")
    {
        \$('#carModel').html(\"<option value=''>Choose Car Model</option> \");
    }
    else
    {
        \$.ajax({
            type:\"GET\",
            url:\"/\"+id+\"/models\",
            data:{},
            success:function(data)
            {
                console.log(data);
                \$('#carModel').html(\"<option value=''>Choose Car Mark</option> \");
                \$.each(data,function(i,item){
                    \$('#carModel').append(\"<option value='\"+item.id+\"'>\"+item.name+\"</option> \")
                });
            }

        });
    }
}

function getCarModelsUpdate(id,check)
{

    if(id == \"\")
    {
        \$('#updateModel').html(\"<option value=''>Choose Car Model</option> \");
    }
    else
    {
        \$.ajax({
            type:\"GET\",
            url:\"/\"+id+\"/models\",
            data:{},
            success:function(data)
            {
               
                \$('#updateModel').html(\"<option value=''>Choose Car Model</option> \");
                \$.each(data,function(i,item){
                    \$('#updateModel').append(\"<option value='\"+item.id+\"'>\"+item.name+\"</option> \")
                });
                 if(check != \"\")
                    {
                        console.log(check);
                        \$(\"select[name='updateModel'] option[value='\"+check+\"']\").prop(\"selected\",\"selected\");
                    }
            }

        });

       
    }
}


        function getCarByID(id)
        {
            \$.ajax({
                url:\"/\"+id+\"/carInfo\",
                type:\"GET\",
                data:{},
                success:function (data) {
                    \$(\".carInfo\").html(data);
                }
            });
        }

        function deleteCarByID(id)
        {
            \$.ajax({
                type:\"DELETE\",
                url:\"/\"+id+\"/car/delete\",
                data:{},
                success:function(data){
                  var result = JSON.stringify(data);
                        if(data.success==true)
                        {
                            alert(data.message);
                            location.reload(true);
                        }
                        else
                        {
                            alert(data.message);
                        }
                   

                }
            });
        }

        function updateCar(form)
        {
            var formData = new FormData(form);
            var idCar= \$(\"select[name='carListUpdate']\").val();

\$.ajax({
        type:\"POST\",
        url:\"/\"+idCar+\"/car/update\",
        data : formData,
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {
             
            if(data.updated == false)
            {
                alert(\"Something went wrong\");
            }
            else
            {
                alert(\"Car Successfully Updated\");
                location.reload(true);
               
            }
        }
    });
        }

            \$(document).on(\"click\",\".Returned\",function () {
               var id = \$(this).attr(\"id\") ;
               alert(id);
                //updateCarDone(id);
            });
               \$(\"#form\").on(\"submit\",function (e) {
                    e.preventDefault();
                    addCar(this);
                });

                \$(\"Select[name='carMark']\").on(\"change\",function () {
                    getCarModels(\$(\"Select[name='carMark']\").val());
            });

              \$(\"#updateMark\").on(\"change\",function () {
                    getCarModelsUpdate(\$(\"#updateMark\").val(),\"\");
            });
            
              \$(\"Select[name='carListUpdate']\").on(\"change\",function () {
                    getCarInfoToUpdate(\$(\"Select[name='carListUpdate']\").val());
            });

             \$(\"select[name='carList']\").on(\"change\",function () {
                if(\$(\"select[name='carList']\").val() ==\"\")
                {
                    \$(\".carInfo\").hide();
                }
                else
                {
                    \$(\".carInfo\").show();
                    getCarByID(\$(\"select[name='carList']\").val());
                }
            });
            \$(\"#formUpdate\").on(\"submit\",function (e) {
                e.preventDefault();
                updateCar(this);
            });
            \$(\"button[name='delete']\").on(\"click\",function () {
                 var carToDelete = \$(\"Select[name='carList']\").val();
                    deleteCarByID(carToDelete);
                });
           
        });
     
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 447
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 448
        echo "
<link rel=\"stylesheet\" href=\"css/admin.css\"/>
<div class=\"mainContainer\">
    <aside>
        <h1 class=\"logo-text\"> <span>AR</span>CARS</h1>
        <ul class=\"mainMenu\">
            <li id=\"dashboard\">
                <i class=\"fas fa-columns\" ></i>
                Dashboard</li>
            <li id=\"carM\"><i class=\"fas fa-car\" ></i>Car Management</li>
                <ul id=\"carManagement\">
                    <li id=\"addCar\">Add Car</li>
                    <li id=\"deleteCar\">Delete Car</li>
                    <li id=\"updateCar\">Update Car</li>
                    <li id=\"statusCar\">Change Car Status</li>
                </ul>
            <li id=\"Reservation\"><i class=\"fas fa-history\" ></i>Reservation</li>
<!--            <li id=\"Admin\"><i class=\"fas fa-users-cog\" ></i>Add Admin</li>-->
        </ul>
    </aside>
    <div class=\"showContainer\">
        <nav>
            <a href=\"";
        // line 470
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">Logout</a>
        </nav>
        <div class=\"content-holder\">
            <div class=\"tabContent\" id=\"dash\">
                <div class=\"welcome\">
                    <p id=\"fullname\">Welcome Back Admin !</p>
                </div>
                <div class=\"stats\">
                    <table border=\"0\">
                        <tr>
                            <td><div class=\"stat-block\" id=\"users\">
                                <div class=\"result\">
                                    <p id=\"user-res\">";
        // line 482
        echo twig_escape_filter($this->env, (isset($context["user_count"]) || array_key_exists("user_count", $context) ? $context["user_count"] : (function () { throw new RuntimeError('Variable "user_count" does not exist.', 482, $this->source); })()), "html", null, true);
        echo " <i class=\"fas fa-users\"></i></p>
                                </div>
                                <p id=\"user-title\">Number of clients</p>
                            </div></td>
                            <td><div class=\"stat-block\" id=\"cars\" >
                                <div class=\"result\">
                                    <p id=\"car-res\">";
        // line 488
        echo twig_escape_filter($this->env, (isset($context["car_count"]) || array_key_exists("car_count", $context) ? $context["car_count"] : (function () { throw new RuntimeError('Variable "car_count" does not exist.', 488, $this->source); })()), "html", null, true);
        echo " <i class=\"fas fa-car\"></i></p>
                                </div>
                                <p id=\"car-title\">Number of cars</p>
                             </div></td>
                            <td><div class=\"stat-block\" id=\"active-reservation\">
                                <div class=\"result\">
                                    <p id=\"actres-res\">";
        // line 494
        echo twig_escape_filter($this->env, (isset($context["act_count"]) || array_key_exists("act_count", $context) ? $context["act_count"] : (function () { throw new RuntimeError('Variable "act_count" does not exist.', 494, $this->source); })()), "html", null, true);
        echo " <i class=\"fas fa-map-marker-alt\"></i></p>
                                </div>
                                <p id=\"actres-title\">Active Reservations</p>
                            </div></td>
                            <td><div class=\"stat-block\" id=\"total-reservation\">
                                <div class=\"result\">
                                    <p id=\"totalres-res\">";
        // line 500
        echo twig_escape_filter($this->env, (isset($context["res_count"]) || array_key_exists("res_count", $context) ? $context["res_count"] : (function () { throw new RuntimeError('Variable "res_count" does not exist.', 500, $this->source); })()), "html", null, true);
        echo " <i class=\"fas fa-copy\"></i></p>
                                </div>
                                <p id=\"totalres-title\">Total Reservations</p>
                            </div></td>
                        </tr>
                    </table>

                </div>
                <div class=\"section2\">
                    <table border=\"0\">
                        <tr>
                            <td><div class=\"half-stats\" id=\"favorite\">
                                <div class=\"half-res\">
                                    <img src=\"images/user-def.png\"/>
                                    <p id=\"name-fav\">Rihab Ben Cheikh</p>
                                </div>
                                <p id=\"fav-title\">Best Client</p>
                            </div></td>
                            <td>
                                <div class=\"half-stats\" id=\"earning\">
                                <div class=\"half-res\">
                                    <p id=\"earning-cont\">50,500DT<i class=\"fas fa-chart-line\" ></i></p>
                                </div>
                                <p id=\"earn-title\">Total Earning</p>
                            </div></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class=\"tabContent\" id=\"car\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-car\"></i> Car List</p>
                </div>
                <table id='allCarsTable' class='table table-striped table-bordered' style='width:100%'>
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Mark</th>
                    <th>Color</th>
                    <th>Year</th>
                    <th>Fuel</th>
                    <th>Seats</th>
                    <th>Price</th>
                    <th>Picture</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 548
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 548, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 549
            echo "                
                    <tr>
                        <td>";
            // line 551
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carName", [], "any", false, false, false, 551), "html", null, true);
            echo "</td>
                        <td>";
            // line 552
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carModel", [], "any", false, false, false, 552), "html", null, true);
            echo "</td>
                        <td>";
            // line 553
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carMark", [], "any", false, false, false, 553), "html", null, true);
            echo "</td>
                        <td>";
            // line 554
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carColor", [], "any", false, false, false, 554), "html", null, true);
            echo "</td>
                        <td>";
            // line 555
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carYear", [], "any", false, false, false, 555), "html", null, true);
            echo "</td>
                        <td>";
            // line 556
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carFuel", [], "any", false, false, false, 556), "html", null, true);
            echo "</td>
                        <td>";
            // line 557
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carSeats", [], "any", false, false, false, 557), "html", null, true);
            echo "</td>
                        <td>";
            // line 558
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carPrice", [], "any", false, false, false, 558), "html", null, true);
            echo "</td>
                        <td><img src=\"uploads/cars/";
            // line 559
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carPic", [], "any", false, false, false, 559), "html", null, true);
            echo "\"/></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 562
        echo "                </tbody>
                </table>
              
              
            </div>
            <div class=\"tabContent\" id=\"reserv\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-history\"></i> Reservation Trace</p>
                </div>
                <table id='allReservationTable' class='table table-striped table-bordered' style='width:100%'>
                
                    <thead><tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>Car</th>
                    <th>Reservation Date</th>
                    <th>Return Date</th>
                    <th>Status</th>
                    </tr></thead>
                    <tbody>
                        ";
        // line 582
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 582, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 583
            echo "                            <tr>
                                <td>";
            // line 584
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 584), "html", null, true);
            echo "</td>
                                <td>";
            // line 585
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "clientName", [], "any", false, false, false, 585), "html", null, true);
            echo "</td>
                                <td>";
            // line 586
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "carName", [], "any", false, false, false, 586), "html", null, true);
            echo "</td>
                                <td>";
            // line 587
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "res_date", [], "any", false, false, false, 587), "html", null, true);
            echo "</td>
                                <td>";
            // line 588
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "ret_date", [], "any", false, false, false, 588), "html", null, true);
            echo "</td>
                                <td>";
            // line 589
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["res"], "status", [], "any", false, false, false, 589), "html", null, true);
            echo "</td>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 591
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"tabContent\" id=\"addC\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-car\"></i> Add new car</p>
                </div>
                <div class=\"formContainer\">
                    <form id=\"form\" name=\"form\" method=\"post\" enctype=\"multipart/form-data\">
                    <table border=\"0\">
                        <tr>
                            <td><label>Name</label></td>
                            <td><input type=\"text\" name=\"carName\"/></td>
                            <td><span id=\"errorCarName\"</td>
                        </tr>
                        <tr>
                            <td><label>Mark</label></td>
                            <td><select name=\"carMark\" id=\"carMark\">
                            <option value=\"\">Choose Car Mark</option> 
                             ";
        // line 610
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marks"]) || array_key_exists("marks", $context) ? $context["marks"] : (function () { throw new RuntimeError('Variable "marks" does not exist.', 610, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
            // line 611
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "id", [], "any", false, false, false, 611), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "mark", [], "any", false, false, false, 611), "html", null, true);
            echo "</option>
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 613
        echo "                            </select></td>
                            <td><span id=\"errorCarMark\"</td>
                        </tr>
                        <tr>
                            <td><label>Model</label></td>
                            <td><select name=\"carModel\" id=\"carModel\">
                            <option value=\"\">Choose Car Model</option> 
                            </select></td>
                            <td><span id=\"errorCarModel\"</td>
                        </tr>
                        <tr>
                            <td><label>Year</label></td>
                            <td><input type=\"number\" name=\"carYear\"/></td>
                            <td><span id=\"errorCarYear\"</td>
                        </tr>
                        <tr>
                            <td><label>Color</label></td>
                            <td>
                                <select name=\"carColor\">
                                    <option value =\"\">Select Car Color</option>
                                    <option value=\"Black\">Black</option>
                                    <option value=\"Red\">Red</option>
                                    <option value=\"White\">White</option>
                                    <option value=\"Blue\">Blue</option>
                                    <option value=\"Other\">Other</option>
                                </select>
                            </td>
                            <td><span id=\"errorCarColor\"</td>
                        </tr>
                        <tr>
                            <td><label>Seats</label></td>
                            <td>
                                <select name=\"carSeats\">
                                    <option value =\"\">Select Car Seat Number</option>
                                    <option value=\"1\">1</option>
                                    <option value=\"2\">2</option>
                                    <option value=\"4\">4</option>
                                    <option value=\"5\">5</option>
                                    <option value=\"8\">8</option>
                                </select>
                            </td>
                            <td><span id=\"errorCarSeats\"</td>
                        </tr>
                        <tr>
                            <td>Fuel</td>
                            <td><select name=\"carFuel\">
                                    <option value=\"\">Select Car Fuel</option>
                                    <option value=\"Diesel\">Diesel</option>
                                    <option value=\"Essence\">Essence</option>
                                    <option value=\"Other\">Other</option>
                                </select></td>
                            <td><span id=\"errorCarFuel\"></span></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td><input type=\"number\" name=\"carPrice\"/></td>
                            <td><span id=\"errorCarPrice\"></span></td>
                        </tr>

                        <tr>
                            <td><label>Pic</label></td>
                            <td><input type=\"file\" name=\"carPic\"/></td>
                            <td><span id=\"errorCarPic\"></span> </td>
                        </tr>
                        <tr>
                            <td><input type=\"reset\" value=\"Cancel\" name=\"cancelCar\"/> </td>
                            <td><input type=\"submit\" value=\"Add\" name=\"addCar\"/> </td>
                            <td></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
            <div class=\"tabContent\" id=\"deleteC\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-car\"></i> Delete Existing Car</p>
                </div>
                <div class=\"formContainer\">
                    <table>
                        <tr>
                            <td><label>Select Car: </label></td>
                            <td><select name=\"carList\">
                                <option value=\"\">Select Car</option>
                                ";
        // line 696
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 696, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 697
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 697), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carName", [], "any", false, false, false, 697), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 699
        echo "                            </select></td>
                        </tr>
                        <tr>
                            <td><button id=\"delete\" name=\"delete\">Delete Car</button></td>
                            <td><input type=\"reset\" name=\"reset\" value=\"Cancel\"/> </td>
                        </tr>
                    </table>

                    <div class=\"carInfo\">
                    </div>
                </div>


            </div>
            <div class=\"tabContent\" id=\"UpdateC\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-car\"></i> Update Existing Car</p>
                </div>
                <div class=\"formContainer\">
                    <table>
                        <tr>
                            <td><label>Select Car: </label></td>
                            <td><select name=\"carListUpdate\">
                                <option value=\"\">Select Car</option>
                                ";
        // line 723
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 723, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 724
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 724), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carName", [], "any", false, false, false, 724), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 726
        echo "                            </select></td>
                        </tr>

                    </table>
                    <div id=\"updateForm\">
                        <form id='formUpdate' name='formUpdate' method='post' enctype='multipart/form-data'>
                       <table border='0'>
                                   <tr>
                                        <td><label>Name</label></td>
                                        <td><input type='text' id=\"updateName\" name='updateName' value=''/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Mark</label></td>
                                            <td><select name=\"updateMark\" id=\"updateMark\">
                                            <option value=\"\">Choose Car Mark</option> 
                                            ";
        // line 741
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marks"]) || array_key_exists("marks", $context) ? $context["marks"] : (function () { throw new RuntimeError('Variable "marks" does not exist.', 741, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
            // line 742
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "id", [], "any", false, false, false, 742), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "mark", [], "any", false, false, false, 742), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 744
        echo "                                            </select></td>
                                            <td><span id=\"errorCarMarkUpdate\"</td>
                                        </tr>
                                        <tr>
                                            <td><label>Model</label></td>
                                            <td><select name=\"updateModel\" id=\"updateModel\">
                                            <option value=\"\">Choose Car Model</option> 
                                            </select></td>
                                            <td><span id=\"errorCarModelUpdate\"</td>
                                        </tr>
                                        <tr>
                                            <td><label>Year</label></td>
                                            <td><input type='number' id=\"updateYear\" name='updateYear' value=''/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Color</label></td>
                                            <td>
                                                <select name='updateColor' id=\"updateColor\">
                                                    <option value =''>Select Car Color</option>
                                                    <option value='Black'>Black</option>
                                                    <option value='Red'>Red</option>
                                                    <option value='White'>White</option>
                                                    <option value='Blue'>Blue</option>
                                                    <option value='Other'>Other</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Seats</label></td>
                                            <td>
                                                <select name='updateSeats' id=\"updateSeats\">
                                                    <option value =''>Select Car Seat Number</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='4'>4</option>
                                                    <option value='5'>5</option>
                                                    <option value='8'>8</option>
                                               </select>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>Fuel</td>
                                            <td><select name='updateFuel' id=\"updateFuel\">
                                                    <option value=''>Select Car Fuel</option>
                                                    <option value='Diesel'>Diesel</option>
                                                    <option value='Essence'>Essence</option>
                                                    <option value='Other'>Other</option>
                                            </select></td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td><input type='number' name='updatePrice' id=\"updatePrice\" value=''/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Pic</label></td>
                                            <td><input type='file' name='updatePic' id=\"updatePic\"/></td>
                                        </tr>
                                        <tr>
                                            <td><input type='reset' value='Cancel' name='cancelCar'/> </td>
                                            <td><input type='submit' value='Update' name='updateCar'/> </td>
                                 </tr>
                               </table>
                        </form>
                    </div>
<!--                    <div class=\"carInfo\">-->
<!--                    </div>-->
                </div>


            </div>
            <div class=\"tabContent\" id=\"StatusC\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-car\"></i> Confirm Car Return</p>
                </div>
                <table id='allDoneCars' class='table table-striped table-bordered' style='width:100%'>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  986 => 744,  975 => 742,  971 => 741,  954 => 726,  943 => 724,  939 => 723,  913 => 699,  902 => 697,  898 => 696,  813 => 613,  802 => 611,  798 => 610,  777 => 591,  769 => 589,  765 => 588,  761 => 587,  757 => 586,  753 => 585,  749 => 584,  746 => 583,  742 => 582,  720 => 562,  711 => 559,  707 => 558,  703 => 557,  699 => 556,  695 => 555,  691 => 554,  687 => 553,  683 => 552,  679 => 551,  675 => 549,  671 => 548,  620 => 500,  611 => 494,  602 => 488,  593 => 482,  578 => 470,  554 => 448,  544 => 447,  281 => 194,  91 => 7,  79 => 6,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block title %}Hello AdminController!{% endblock %}
{% block javascripts %} 
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            var showed = false;
            \$(\"#allCarsTable\").DataTable({bSort:false, \"autoWidth\": true,\"pageLength\":10,
                'aoColumns': [
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSearchable: false, bSortable: false },
                ],
                \"info\":           true,
                \"bInfo\":           false,
                \"bLengthChange\": false,
                \"bFilter\": false,
                \"paging\":         true});
            \$(\"#allReservationTable\").DataTable({bSort:false, \"autoWidth\": true,
               'aoColumns': [

                   { bSortable: false },
                   { bSortable: false },
                   { bSortable: false },
                   { bSortable: false },
                   { bSortable: false },
                   { bSortable: false },
               ],
               \"bInfo\":           false,
               \"bLengthChange\": false,
               \"bFilter\": false,
               \"paging\":         true});
            \$(\"#allDoneCars\").DataTable({bSort:false, \"autoWidth\": true,
                'aoColumns': [

                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                    { bSortable: false },
                ],
                \"bInfo\":           false,
                \"bLengthChange\": false,
                \"bFilter\": false,
                \"paging\":         true});
            function showTab(name)
            {
                \$(\".tabContent\").each(function (index) {
                    \$(this).fadeOut(500);
                })
                \$(name).delay(500).fadeIn(500);
            }
            \$(\"#dashboard\").on(\"click\",function () {
                    showTab(\"#dash\");
                //getClientNumber();
                //getCarNumbers();
                //getActiveRes();
                //getFavClient();
                //getAllRevenus();
            });
            \$(\"#carM\").on(\"click\",function () {

                showTab(\"#car\");
                //getCars();
                  
                  
                if(showed == false)
                {
                    \$(\"#carManagement\").slideDown(500);
                    showed = true;
                }
                else
                {
                    \$(\"#carManagement\").slideUp(500);
                    showed = false;
                }

            });

            \$(\"#addCar\").on(\"click\",function () {

                showTab(\"#addC\");

            });
            \$(\"#updateCar\").on(\"click\",function () {

                showTab(\"#UpdateC\");
                //getCarsToUpdate();

            });
            \$(\"#deleteCar\").on(\"click\",function () {

                showTab(\"#deleteC\");
                //getCarsToDelete();
            });

            \$(\"#Reservation\").on(\"click\",function () {

                showTab(\"#reserv\");
                //getReservation();

            });

            \$(\"#statusCar\").on(\"click\",function () {
               showTab(\"#StatusC\")
               //getDoneCars();
            });
            function addCar(form){
                var errorRate = 0;
                var name=\$(\"input[name='carName']\").val();
                var mark=\$(\"select[name='carMark']\").val();
                var model=\$(\"select[name='carModel']\").val();
                var year=\$(\"input[name='carYear']\").val();
                var color=\$(\"select[name='carColor']\").val();
                var fuel=\$(\"select[name='carFuel']\").val();
                var price=\$(\"input[name='carPrice']\").val();
                var carImage=\$(\"input[name='carPic']\").val();
                var seats=\$(\"select[name='carSeats']\").val();
                \$(\"#errorCarName\").html(\"\");
                \$(\"#errorCarMark\").html(\"\");
                \$(\"#errorCarModel\").html(\"\");
                \$(\"#errorCarYear\").html(\"\");
                \$(\"#errorCarColor\").html(\"\");
                \$(\"#errorCarFuel\").html(\"\");
                \$(\"#errorCarSeats\").html(\"\");
                \$(\"#errorCarPrice\").html(\"\");
                \$(\"#errorCarPic\").html(\"\");

                if(name == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarName\").html(\"Enter a Name\");

                }
                if(mark == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarMark\").html(\"Choose a Mark\");
                }
                if(model == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarModel\").html(\"Choose a Model\");

                }
                if(year == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarYear\").html(\"Enter year\");
                }
                if(color == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarColor\").html(\"Choose a color\");

                }
                if(seats == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarSeats\").html(\"Choose seats number\");
                }
                if(fuel == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarFuel\").html(\"Choose fuel type\");
                }
                if((price == \"\") || (price <= 0))
                {
                    errorRate++;
                    \$(\"#errorCarPrice\").html(\"Enter a price\");

                }
                if(carImage == \"\")
                {
                    errorRate++;
                    \$(\"#errorCarPic\").html(\"Choose a picture\");
                }
                if(errorRate == 0)
                {
                    var formData = new FormData(form);
                    formData.append(\"fname\",\"addCar\");
                    \$.ajax({
                    type:\"POST\",
                    url:\"{{path('addCar')}}\",
                    data : formData,
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(data){
                        var result = JSON.stringify(data);
                        if(data.status == \"success\" && data.fileUploaded==true)
                        {
                            alert(\"Car Successfully Added\");
                            location.reload(true);
                        }
                        if(data.fileUploaded==false)
                        {
                            alert(\"There was something during uploading the image\");
                        }
                            
                        }
                    });
                }

            }

function getCarInfoToUpdate(id)
{
    \$.ajax({
        type:'GET',
        url:\"/\"+id+\"/car/info\",
        data:{},
        success:function(data)
        {
            var result = JSON.parse(JSON.stringify(data));
            \$.each(result,function(i,item){          
            \$(\"#updateName\").val(item.carName);
            \$(\"select[name='updateColor'] option[value='\"+item.carColor+\"']\").prop(\"selected\",\"selected\");
            \$(\"select[name='updateSeats'] option[value='\"+item.carSeats+\"']\").prop(\"selected\",\"selected\");
            \$(\"select[name='updateFuel'] option[value='\"+item.carFuel+\"']\").prop(\"selected\",\"selected\");
            \$(\"#updatePrice\").val(item.carPrice);
            \$(\"#updateYear\").val(item.carYear);
            \$(\"select[name='updateMark'] option[value='\"+item.carMark+\"']\").prop(\"selected\",\"selected\");
            getCarModelsUpdate(\$(\"#updateMark\").val(),item.carModel);

        });
        }
    });
}


function updateCar(form) {
    var formData = new FormData(form);
    formData.append(\"fname\",\"updateCar\");
    formData.append(\"idCar\", \$(\"select[name='carListUpdate']\").val());

\$.ajax({
        type:\"POST\",
        url:\"/PHP_Project/Controller/AdminController.php\",
        data : formData,
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {
             console.log(data);
            if(data == \"0\")
            {
                alert(\"Something went wrong\");
            }
            else if(data ==\"1\")
            {
                alert(\"Car Successfully Updated\");
                getCarsToUpdate();
                \$(\"#formUpdate\").html(\"\");
            }
            else
            {
                alert(\"Something went wrong\");
            }
        }
    });
}





function getCarModels(id)
{

    if(id == \"\")
    {
        \$('#carModel').html(\"<option value=''>Choose Car Model</option> \");
    }
    else
    {
        \$.ajax({
            type:\"GET\",
            url:\"/\"+id+\"/models\",
            data:{},
            success:function(data)
            {
                console.log(data);
                \$('#carModel').html(\"<option value=''>Choose Car Mark</option> \");
                \$.each(data,function(i,item){
                    \$('#carModel').append(\"<option value='\"+item.id+\"'>\"+item.name+\"</option> \")
                });
            }

        });
    }
}

function getCarModelsUpdate(id,check)
{

    if(id == \"\")
    {
        \$('#updateModel').html(\"<option value=''>Choose Car Model</option> \");
    }
    else
    {
        \$.ajax({
            type:\"GET\",
            url:\"/\"+id+\"/models\",
            data:{},
            success:function(data)
            {
               
                \$('#updateModel').html(\"<option value=''>Choose Car Model</option> \");
                \$.each(data,function(i,item){
                    \$('#updateModel').append(\"<option value='\"+item.id+\"'>\"+item.name+\"</option> \")
                });
                 if(check != \"\")
                    {
                        console.log(check);
                        \$(\"select[name='updateModel'] option[value='\"+check+\"']\").prop(\"selected\",\"selected\");
                    }
            }

        });

       
    }
}


        function getCarByID(id)
        {
            \$.ajax({
                url:\"/\"+id+\"/carInfo\",
                type:\"GET\",
                data:{},
                success:function (data) {
                    \$(\".carInfo\").html(data);
                }
            });
        }

        function deleteCarByID(id)
        {
            \$.ajax({
                type:\"DELETE\",
                url:\"/\"+id+\"/car/delete\",
                data:{},
                success:function(data){
                  var result = JSON.stringify(data);
                        if(data.success==true)
                        {
                            alert(data.message);
                            location.reload(true);
                        }
                        else
                        {
                            alert(data.message);
                        }
                   

                }
            });
        }

        function updateCar(form)
        {
            var formData = new FormData(form);
            var idCar= \$(\"select[name='carListUpdate']\").val();

\$.ajax({
        type:\"POST\",
        url:\"/\"+idCar+\"/car/update\",
        data : formData,
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {
             
            if(data.updated == false)
            {
                alert(\"Something went wrong\");
            }
            else
            {
                alert(\"Car Successfully Updated\");
                location.reload(true);
               
            }
        }
    });
        }

            \$(document).on(\"click\",\".Returned\",function () {
               var id = \$(this).attr(\"id\") ;
               alert(id);
                //updateCarDone(id);
            });
               \$(\"#form\").on(\"submit\",function (e) {
                    e.preventDefault();
                    addCar(this);
                });

                \$(\"Select[name='carMark']\").on(\"change\",function () {
                    getCarModels(\$(\"Select[name='carMark']\").val());
            });

              \$(\"#updateMark\").on(\"change\",function () {
                    getCarModelsUpdate(\$(\"#updateMark\").val(),\"\");
            });
            
              \$(\"Select[name='carListUpdate']\").on(\"change\",function () {
                    getCarInfoToUpdate(\$(\"Select[name='carListUpdate']\").val());
            });

             \$(\"select[name='carList']\").on(\"change\",function () {
                if(\$(\"select[name='carList']\").val() ==\"\")
                {
                    \$(\".carInfo\").hide();
                }
                else
                {
                    \$(\".carInfo\").show();
                    getCarByID(\$(\"select[name='carList']\").val());
                }
            });
            \$(\"#formUpdate\").on(\"submit\",function (e) {
                e.preventDefault();
                updateCar(this);
            });
            \$(\"button[name='delete']\").on(\"click\",function () {
                 var carToDelete = \$(\"Select[name='carList']\").val();
                    deleteCarByID(carToDelete);
                });
           
        });
     
    </script>
{% endblock %}
{% block body %}

<link rel=\"stylesheet\" href=\"css/admin.css\"/>
<div class=\"mainContainer\">
    <aside>
        <h1 class=\"logo-text\"> <span>AR</span>CARS</h1>
        <ul class=\"mainMenu\">
            <li id=\"dashboard\">
                <i class=\"fas fa-columns\" ></i>
                Dashboard</li>
            <li id=\"carM\"><i class=\"fas fa-car\" ></i>Car Management</li>
                <ul id=\"carManagement\">
                    <li id=\"addCar\">Add Car</li>
                    <li id=\"deleteCar\">Delete Car</li>
                    <li id=\"updateCar\">Update Car</li>
                    <li id=\"statusCar\">Change Car Status</li>
                </ul>
            <li id=\"Reservation\"><i class=\"fas fa-history\" ></i>Reservation</li>
<!--            <li id=\"Admin\"><i class=\"fas fa-users-cog\" ></i>Add Admin</li>-->
        </ul>
    </aside>
    <div class=\"showContainer\">
        <nav>
            <a href=\"{{path('logout')}}\">Logout</a>
        </nav>
        <div class=\"content-holder\">
            <div class=\"tabContent\" id=\"dash\">
                <div class=\"welcome\">
                    <p id=\"fullname\">Welcome Back Admin !</p>
                </div>
                <div class=\"stats\">
                    <table border=\"0\">
                        <tr>
                            <td><div class=\"stat-block\" id=\"users\">
                                <div class=\"result\">
                                    <p id=\"user-res\">{{user_count}} <i class=\"fas fa-users\"></i></p>
                                </div>
                                <p id=\"user-title\">Number of clients</p>
                            </div></td>
                            <td><div class=\"stat-block\" id=\"cars\" >
                                <div class=\"result\">
                                    <p id=\"car-res\">{{car_count}} <i class=\"fas fa-car\"></i></p>
                                </div>
                                <p id=\"car-title\">Number of cars</p>
                             </div></td>
                            <td><div class=\"stat-block\" id=\"active-reservation\">
                                <div class=\"result\">
                                    <p id=\"actres-res\">{{act_count}} <i class=\"fas fa-map-marker-alt\"></i></p>
                                </div>
                                <p id=\"actres-title\">Active Reservations</p>
                            </div></td>
                            <td><div class=\"stat-block\" id=\"total-reservation\">
                                <div class=\"result\">
                                    <p id=\"totalres-res\">{{res_count}} <i class=\"fas fa-copy\"></i></p>
                                </div>
                                <p id=\"totalres-title\">Total Reservations</p>
                            </div></td>
                        </tr>
                    </table>

                </div>
                <div class=\"section2\">
                    <table border=\"0\">
                        <tr>
                            <td><div class=\"half-stats\" id=\"favorite\">
                                <div class=\"half-res\">
                                    <img src=\"images/user-def.png\"/>
                                    <p id=\"name-fav\">Rihab Ben Cheikh</p>
                                </div>
                                <p id=\"fav-title\">Best Client</p>
                            </div></td>
                            <td>
                                <div class=\"half-stats\" id=\"earning\">
                                <div class=\"half-res\">
                                    <p id=\"earning-cont\">50,500DT<i class=\"fas fa-chart-line\" ></i></p>
                                </div>
                                <p id=\"earn-title\">Total Earning</p>
                            </div></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class=\"tabContent\" id=\"car\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-car\"></i> Car List</p>
                </div>
                <table id='allCarsTable' class='table table-striped table-bordered' style='width:100%'>
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Mark</th>
                    <th>Color</th>
                    <th>Year</th>
                    <th>Fuel</th>
                    <th>Seats</th>
                    <th>Price</th>
                    <th>Picture</th>
                    </tr>
                </thead>
                <tbody>
                {% for car in cars %}
                
                    <tr>
                        <td>{{car.carName}}</td>
                        <td>{{car.carModel}}</td>
                        <td>{{car.carMark}}</td>
                        <td>{{car.carColor}}</td>
                        <td>{{car.carYear}}</td>
                        <td>{{car.carFuel}}</td>
                        <td>{{car.carSeats}}</td>
                        <td>{{car.carPrice}}</td>
                        <td><img src=\"uploads/cars/{{car.carPic}}\"/></td>
                    </tr>
                {% endfor %}
                </tbody>
                </table>
              
              
            </div>
            <div class=\"tabContent\" id=\"reserv\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-history\"></i> Reservation Trace</p>
                </div>
                <table id='allReservationTable' class='table table-striped table-bordered' style='width:100%'>
                
                    <thead><tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>Car</th>
                    <th>Reservation Date</th>
                    <th>Return Date</th>
                    <th>Status</th>
                    </tr></thead>
                    <tbody>
                        {% for res in reservations %}
                            <tr>
                                <td>{{res.id}}</td>
                                <td>{{res.clientName}}</td>
                                <td>{{res.carName}}</td>
                                <td>{{res.res_date}}</td>
                                <td>{{res.ret_date}}</td>
                                <td>{{res.status}}</td>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"tabContent\" id=\"addC\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-car\"></i> Add new car</p>
                </div>
                <div class=\"formContainer\">
                    <form id=\"form\" name=\"form\" method=\"post\" enctype=\"multipart/form-data\">
                    <table border=\"0\">
                        <tr>
                            <td><label>Name</label></td>
                            <td><input type=\"text\" name=\"carName\"/></td>
                            <td><span id=\"errorCarName\"</td>
                        </tr>
                        <tr>
                            <td><label>Mark</label></td>
                            <td><select name=\"carMark\" id=\"carMark\">
                            <option value=\"\">Choose Car Mark</option> 
                             {% for mark in marks %}
                                <option value=\"{{mark.id}}\">{{mark.mark}}</option>
                             {% endfor %}
                            </select></td>
                            <td><span id=\"errorCarMark\"</td>
                        </tr>
                        <tr>
                            <td><label>Model</label></td>
                            <td><select name=\"carModel\" id=\"carModel\">
                            <option value=\"\">Choose Car Model</option> 
                            </select></td>
                            <td><span id=\"errorCarModel\"</td>
                        </tr>
                        <tr>
                            <td><label>Year</label></td>
                            <td><input type=\"number\" name=\"carYear\"/></td>
                            <td><span id=\"errorCarYear\"</td>
                        </tr>
                        <tr>
                            <td><label>Color</label></td>
                            <td>
                                <select name=\"carColor\">
                                    <option value =\"\">Select Car Color</option>
                                    <option value=\"Black\">Black</option>
                                    <option value=\"Red\">Red</option>
                                    <option value=\"White\">White</option>
                                    <option value=\"Blue\">Blue</option>
                                    <option value=\"Other\">Other</option>
                                </select>
                            </td>
                            <td><span id=\"errorCarColor\"</td>
                        </tr>
                        <tr>
                            <td><label>Seats</label></td>
                            <td>
                                <select name=\"carSeats\">
                                    <option value =\"\">Select Car Seat Number</option>
                                    <option value=\"1\">1</option>
                                    <option value=\"2\">2</option>
                                    <option value=\"4\">4</option>
                                    <option value=\"5\">5</option>
                                    <option value=\"8\">8</option>
                                </select>
                            </td>
                            <td><span id=\"errorCarSeats\"</td>
                        </tr>
                        <tr>
                            <td>Fuel</td>
                            <td><select name=\"carFuel\">
                                    <option value=\"\">Select Car Fuel</option>
                                    <option value=\"Diesel\">Diesel</option>
                                    <option value=\"Essence\">Essence</option>
                                    <option value=\"Other\">Other</option>
                                </select></td>
                            <td><span id=\"errorCarFuel\"></span></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td><input type=\"number\" name=\"carPrice\"/></td>
                            <td><span id=\"errorCarPrice\"></span></td>
                        </tr>

                        <tr>
                            <td><label>Pic</label></td>
                            <td><input type=\"file\" name=\"carPic\"/></td>
                            <td><span id=\"errorCarPic\"></span> </td>
                        </tr>
                        <tr>
                            <td><input type=\"reset\" value=\"Cancel\" name=\"cancelCar\"/> </td>
                            <td><input type=\"submit\" value=\"Add\" name=\"addCar\"/> </td>
                            <td></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
            <div class=\"tabContent\" id=\"deleteC\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-car\"></i> Delete Existing Car</p>
                </div>
                <div class=\"formContainer\">
                    <table>
                        <tr>
                            <td><label>Select Car: </label></td>
                            <td><select name=\"carList\">
                                <option value=\"\">Select Car</option>
                                {% for car in cars %}
                                    <option value=\"{{car.id}}\">{{car.carName}}</option>
                                {% endfor %}
                            </select></td>
                        </tr>
                        <tr>
                            <td><button id=\"delete\" name=\"delete\">Delete Car</button></td>
                            <td><input type=\"reset\" name=\"reset\" value=\"Cancel\"/> </td>
                        </tr>
                    </table>

                    <div class=\"carInfo\">
                    </div>
                </div>


            </div>
            <div class=\"tabContent\" id=\"UpdateC\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-car\"></i> Update Existing Car</p>
                </div>
                <div class=\"formContainer\">
                    <table>
                        <tr>
                            <td><label>Select Car: </label></td>
                            <td><select name=\"carListUpdate\">
                                <option value=\"\">Select Car</option>
                                {% for car in cars %}
                                    <option value=\"{{car.id}}\">{{car.carName}}</option>
                                {% endfor %}
                            </select></td>
                        </tr>

                    </table>
                    <div id=\"updateForm\">
                        <form id='formUpdate' name='formUpdate' method='post' enctype='multipart/form-data'>
                       <table border='0'>
                                   <tr>
                                        <td><label>Name</label></td>
                                        <td><input type='text' id=\"updateName\" name='updateName' value=''/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Mark</label></td>
                                            <td><select name=\"updateMark\" id=\"updateMark\">
                                            <option value=\"\">Choose Car Mark</option> 
                                            {% for mark in marks %}
                                                <option value=\"{{mark.id}}\">{{mark.mark}}</option>
                                            {% endfor %}
                                            </select></td>
                                            <td><span id=\"errorCarMarkUpdate\"</td>
                                        </tr>
                                        <tr>
                                            <td><label>Model</label></td>
                                            <td><select name=\"updateModel\" id=\"updateModel\">
                                            <option value=\"\">Choose Car Model</option> 
                                            </select></td>
                                            <td><span id=\"errorCarModelUpdate\"</td>
                                        </tr>
                                        <tr>
                                            <td><label>Year</label></td>
                                            <td><input type='number' id=\"updateYear\" name='updateYear' value=''/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Color</label></td>
                                            <td>
                                                <select name='updateColor' id=\"updateColor\">
                                                    <option value =''>Select Car Color</option>
                                                    <option value='Black'>Black</option>
                                                    <option value='Red'>Red</option>
                                                    <option value='White'>White</option>
                                                    <option value='Blue'>Blue</option>
                                                    <option value='Other'>Other</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Seats</label></td>
                                            <td>
                                                <select name='updateSeats' id=\"updateSeats\">
                                                    <option value =''>Select Car Seat Number</option>
                                                    <option value='1'>1</option>
                                                    <option value='2'>2</option>
                                                    <option value='4'>4</option>
                                                    <option value='5'>5</option>
                                                    <option value='8'>8</option>
                                               </select>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>Fuel</td>
                                            <td><select name='updateFuel' id=\"updateFuel\">
                                                    <option value=''>Select Car Fuel</option>
                                                    <option value='Diesel'>Diesel</option>
                                                    <option value='Essence'>Essence</option>
                                                    <option value='Other'>Other</option>
                                            </select></td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td><input type='number' name='updatePrice' id=\"updatePrice\" value=''/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Pic</label></td>
                                            <td><input type='file' name='updatePic' id=\"updatePic\"/></td>
                                        </tr>
                                        <tr>
                                            <td><input type='reset' value='Cancel' name='cancelCar'/> </td>
                                            <td><input type='submit' value='Update' name='updateCar'/> </td>
                                 </tr>
                               </table>
                        </form>
                    </div>
<!--                    <div class=\"carInfo\">-->
<!--                    </div>-->
                </div>


            </div>
            <div class=\"tabContent\" id=\"StatusC\">
                <div class=\"page-title\">
                    <p><i class=\"fas fa-car\"></i> Confirm Car Return</p>
                </div>
                <table id='allDoneCars' class='table table-striped table-bordered' style='width:100%'>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/admin.html.twig", "C:\\xampp\\htdocs\\ARCars\\templates\\admin\\admin.html.twig");
    }
}
