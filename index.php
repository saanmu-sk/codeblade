<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Compiler</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="design/assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="css/select2.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="codemirror/addon/hint/show-hint.css" />
    <link rel="stylesheet" href="codemirror/lib/codemirror.css" />
    <link rel="stylesheet" href="codemirror/theme/3024-day.css">
    <link rel="stylesheet" href="codemirror/theme/3024-night.css">
    <link rel="stylesheet" href="codemirror/theme/abcdef.css">
    <link rel="stylesheet" href="codemirror/theme/ambiance.css">
    <link rel="stylesheet" href="codemirror/theme/base16-dark.css">
    <link rel="stylesheet" href="codemirror/theme/bespin.css">
    <link rel="stylesheet" href="codemirror/theme/base16-light.css">
    <link rel="stylesheet" href="codemirror/theme/blackboard.css">
    <link rel="stylesheet" href="codemirror/theme/cobalt.css">
    <link rel="stylesheet" href="codemirror/theme/colorforth.css">
    <link rel="stylesheet" href="codemirror/theme/dracula.css">
    <link rel="stylesheet" href="codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="codemirror/theme/duotone-light.css">
    <link rel="stylesheet" href="codemirror/theme/eclipse.css">
    <link rel="stylesheet" href="codemirror/theme/elegant.css">
    <link rel="stylesheet" href="codemirror/theme/erlang-dark.css">
    <link rel="stylesheet" href="codemirror/theme/gruvbox-dark.css">
    <link rel="stylesheet" href="codemirror/theme/hopscotch.css">
    <link rel="stylesheet" href="codemirror/theme/icecoder.css">
    <link rel="stylesheet" href="codemirror/theme/isotope.css">
    <link rel="stylesheet" href="codemirror/theme/lesser-dark.css">
    <link rel="stylesheet" href="codemirror/theme/liquibyte.css">
    <link rel="stylesheet" href="codemirror/theme/lucario.css">
    <link rel="stylesheet" href="codemirror/theme/material.css">
    <link rel="stylesheet" href="codemirror/theme/mbo.css">
    <link rel="stylesheet" href="codemirror/theme/mdn-like.css">
    <link rel="stylesheet" href="codemirror/theme/midnight.css">
    <link rel="stylesheet" href="codemirror/theme/monokai.css">
    <link rel="stylesheet" href="codemirror/theme/neat.css">
    <link rel="stylesheet" href="codemirror/theme/neo.css">
    <link rel="stylesheet" href="codemirror/theme/night.css">
    <link rel="stylesheet" href="codemirror/theme/nord.css">
    <link rel="stylesheet" href="codemirror/theme/oceanic-next.css">
    <link rel="stylesheet" href="codemirror/theme/panda-syntax.css">
    <link rel="stylesheet" href="codemirror/theme/paraiso-dark.css">
    <link rel="stylesheet" href="codemirror/theme/paraiso-light.css">
    <link rel="stylesheet" href="codemirror/theme/pastel-on-dark.css">
    <link rel="stylesheet" href="codemirror/theme/railscasts.css">
    <link rel="stylesheet" href="codemirror/theme/rubyblue.css">
    <link rel="stylesheet" href="codemirror/theme/seti.css">
    <link rel="stylesheet" href="codemirror/theme/shadowfox.css">
    <link rel="stylesheet" href="codemirror/theme/solarized.css">
    <link rel="stylesheet" href="codemirror/theme/the-matrix.css">
    <link rel="stylesheet" href="codemirror/theme/tomorrow-night-bright.css">
    <link rel="stylesheet" href="codemirror/theme/tomorrow-night-eighties.css">
    <link rel="stylesheet" href="codemirror/theme/ttcn.css">
    <link rel="stylesheet" href="codemirror/theme/twilight.css">
    <link rel="stylesheet" href="codemirror/theme/vibrant-ink.css">
    <link rel="stylesheet" href="codemirror/theme/xq-dark.css">
    <link rel="stylesheet" href="codemirror/theme/xq-light.css">
    <link rel="stylesheet" href="codemirror/theme/yeti.css">
    <link rel="stylesheet" href="codemirror/theme/idea.css">
    <link rel="stylesheet" href="codemirror/theme/darcula.css">
    <link rel="stylesheet" href="codemirror/theme/yonce.css">
    <link rel="stylesheet" href="codemirror/theme/zenburn.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
    <!--   Core JS Files   -->
    <script src="design/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="design/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="design/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="design/assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="design/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="design/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="design/assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
    <script src="codemirror/lib/codemirror.js"></script>
    <script src="codemirror/addon/edit/closetag.js"></script>
    <script src="codemirror/addon/edit/matchbrackets.js"></script>
    <script src="codemirror/addon/hint/show-hint.js"></script>
    <script src="codemirror/mode/clike/clike.js"></script>
    <script src="codemirror/mode/python/python.js"></script>
	<script src="codemirror/mode/htmlmixed/htmlmixed.js"></script>
	<script src="codemirror/mode/xml/xml.js"></script>
	<script src="codemirror/mode/javascript/javascript.js"></script>
	<script src="codemirror/mode/css/css.js"></script>
	<script src="codemirror/mode/php/php.js"></script>
    <script src="codemirror/addon/selection/active-line.js"></script>
    <script src="js/validate/jquery.validate.js"></script>
    <script src="js/select2.min.js"></script>
    <style>
    .CodeMirror {
font-size: 16px;
}
    </style>
</head>
<body class="bg-light">
    <?php include "header.php";?>
    <div class="container-fluid mt-5">
        <form action="" id="frm" name="frm" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="language">Choose </label>
                        <select class="form-control selectpicker" data-style="btn btn-link" id="language" name="language" onchange="selectLanguage()">
                            <option value="" disabled selected>Language</option>
                            <option value="C">C</option>
                            <option value="C++">C++</option>
                            <option value="Java">Java</option>
                            <option value="Python">Python2</option>
                            <option value="Python3">Python3</option>
                            <option value="php">Php</option>
                        </select>
                    </div>
                    
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="theme">Theme</label>
                            <select onchange="selectTheme()" id="select" class="form-control selectpicker">
                                <option selected>default</option>
                                <option>3024-day</option>
                                <option>3024-night</option>
                                <option>abcdef</option>
                                <option>ambiance</option>
                                <option>base16-dark</option>
                                <option>base16-light</option>
                                <option>bespin</option>
                                <option>blackboard</option>
                                <option>cobalt</option>
                                <option>colorforth</option>
                                <option>darcula</option>
                                <option>dracula</option>
                                <option>duotone-dark</option>
                                <option>duotone-light</option>
                                <option>eclipse</option>
                                <option>elegant</option>
                                <option>erlang-dark</option>
                                <option>gruvbox-dark</option>
                                <option>hopscotch</option>
                                <option>icecoder</option>
                                <option>idea</option>
                                <option>isotope</option>
                                <option>lesser-dark</option>
                                <option>liquibyte</option>
                                <option>lucario</option>
                                <option>material</option>
                                <option>mbo</option>
                                <option>mdn-like</option>
                                <option>midnight</option>
                                <option>monokai</option>
                                <option>neat</option>
                                <option>neo</option>
                                <option>night</option>
                                <option>nord</option>
                                <option>oceanic-next</option>
                                <option>panda-syntax</option>
                                <option>paraiso-dark</option>
                                <option>paraiso-light</option>
                                <option>pastel-on-dark</option>
                                <option>railscasts</option>
                                <option>rubyblue</option>
                                <option>seti</option>
                                <option>shadowfox</option>
                                <option>solarized dark</option>
                                <option>solarized light</option>
                                <option>the-matrix</option>
                                <option>tomorrow-night-bright</option>
                                <option>tomorrow-night-eighties</option>
                                <option>ttcn</option>
                                <option>twilight</option>
                                <option>vibrant-ink</option>
                                <option>xq-dark</option>
                                <option>xq-light</option>
                                <option>yeti</option>
                                <option>yonce</option>
                                <option>zenburn</option>
                            </select>
                        </div>
                    </div>
            </div>
		
            <div class="row " >
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card text-center">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                            <h4 class="card-title">Welcome To CodeBlade</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            Lets Code And Compile
                        </div>
                    </div>
					<div class="img-raised">
						<textarea name="code" id="code" cols="30" rows="20" class="form-control " style="font-size: 50px;"></textarea>
					</div>
                    <br>
                    <div class="float-left">
                        <p id="time"></p>
                        <p id="memory"></p>
                        
                    </div>
                    <button type="submit" class="float-right btn btn-primary" name="run" id="run">Run</button>
                </div>
                <div class="col-md-2">
                    
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            
                            <textarea name="input" id="input" cols="30" rows="5" class="form-control" spellcheck="false" placeholder="Type Your Input Here"onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}"></textarea><br>
                        </div>
                        <div class="col-md-6">
                            
                            <textarea name="output" id="output" cols="30" rows="10" class="form-control animated fadeInDown" spellcheck="false" readonly></textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row pb-5">
                <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="border border-warning rounded animated flipInX p-2 " id="war">
                            <p class="text-black">Warning:</p>
                            <pre class="text-warning"></pre>
                        </div>
                        <div class="border border-danger rounded animated flipInX p-2 " id="rnt">
                            <p class="text-black">Run Time Error:</p>
                            <pre class="text-danger"></pre>
                        </div>
                        <div class="border border-danger rounded animated flipInX p-2 " id="cmp">
                            <p class="text-black">Compilation Error:</p>
                            <pre class="text-danger"></pre>
                        </div>
                        
                    </div>
                <div class="col-md-1"></div>
            </div>
        </form>
    </div>
</body>
</html>
<script>
jQuery.ajaxPrefilter(function(options) {
    if (options.crossDomain && jQuery.support.cors) {
        options.url = 'https://cors-anywhere.herokuapp.com/' + options.url;
    }
});
</script>
<script>
    $(document).ready(function() {
        //$("#language").select2();
        //$("#select").select2();
        $("#run").click(function () {
            $("#output").hide();
            $( "#rnt" ).hide();
            $( "#cmp" ).hide();
            $( "#war" ).hide();
        });
        $("#output").hide();
        $( "#rnt" ).hide();
        $( "#cmp" ).hide();
        $( "#war" ).hide();
        $.validator.setDefaults( {
                
                submitHandler: function () {
                    $('#run').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Compiling...').addClass('disabled');
                    
                    $.ajax({
                        url:"https://ide.geeksforgeeks.org/main.php",
                        type:"post",
                        data: { lang: $( "#language" ).val(), code: $( "#code" ).val(), input: $( "#input" ).val(), save: true},
                        dataType: "json",
                        success:function(data) {
                            $("#run").html('Run').removeClass("disabled");
                            $( "#time" ).text("Time in Seconds: " + data.time );
                            $( "#memory" ).text("Memory Used in MB: " + data.memory );
                            $("#output").show();

                            if( data.rntError != "" && data.rntError != null ) {
                                $( "#rnt" ).show();
                                $( "#rnt pre" ).text( data.rntError );
                                $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                            }

                            if( data.output != "" && data.output != null ) {
                                $( "#output" ).text( data.output );
                                $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                            } else {
                                $( "#output" ).text( 'No Output' );
                                $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                            }

                            if( data.cmpError != "" && data.cmpError != null  ) {
                                if( data.compResult == "F" ){
                                    $( "#cmp" ).show();
                                    $( "#cmp pre" ).text( data.cmpError );
                                    $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                                }else{
                                    $( "#war" ).show();
                                    $( "#war pre" ).text( data.cmpError );
                                    $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                                }
                            }
                        }
                    });
                }
            } );
            $( "#frm" ).validate( {
                rules: {
                    language: "required",
                    code: "required",
                    
                },
                messages: {
                    language: "Please specify the Language",
                    code: "Please Write a Code First",
                    
                },
                
                

            } );
        
    });
	
	
	
	
	
	var editor = CodeMirror.fromTextArea(document.getElementById("code"),{
                        styleActiveLine: true,
                        lineNumbers:true,
                        autoCloseTags:true,
                        matchBrackets: true,
                    });
                    var inputTheme = document.getElementById("select");
                    function selectTheme() {
                        var theme = inputTheme.options[inputTheme.selectedIndex].textContent;
                        editor.setOption("theme", theme);
                    } 
					
					var input = document.getElementById("language");
                    function selectLanguage() {
                        var mode = input.options[input.selectedIndex].textContent;
                        if (mode == "C") {
                            mode = "text/x-csrc";
                        }
                        if (mode == "C++") {
                            mode = "text/x-c++src";
                        }
                        if (mode == "Java") {
                            mode = "text/x-java";
                        }
                        if (mode == "Python3" || mode == "Python2") {
                            mode = "python";
                        }
                        if (mode == "Php") {
                            mode = "application/x-httpd-php";
                        }
                        console.log(mode);
                        editor.setOption("mode", mode);
                    }
					
</script>