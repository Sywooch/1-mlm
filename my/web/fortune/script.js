var Wheel = (function () {
    var wheel = document.getElementById('wheel'),
        wheelValues = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
        spinTimeout = false,
        spinModifier = function () {
            return Math.random() * 10 + 20;
        },
        modifier = spinModifier(),
        slowdownSpeed = 0.5,
        prefix = (function () {
            if (document.body.style.MozTransform !== undefined) {
                return "MozTransform";
            } else if (document.body.style.WebkitTransform !== undefined) {
                return "WebkitTransform";
            } else if (document.body.style.OTransform !== undefined) {
                return "OTransform";
            } else {
                return "";
            }
        }()),
        degreeToRadian = function (deg) {
            return deg / (Math.PI * 180);
        };

    function Wheel() {};

    Wheel.prototype.rotate = function (degrees) {
        var val = "rotate(-" + degrees + "deg)";
        if (wheel.style[prefix] != undefined) wheel.style[prefix] = val;
        var rad = degreeToRadian(degrees % 360),
            filter = "progid:DXImageTransform.Microsoft.Matrix(sizingMethod='auto expand', M11=" + rad + ", M12=-" + rad + ", M21=" + rad + ", M22=" + rad + ")";
        if (wheel.style["filter"] != undefined) wheel.style["filter"] = filter;
        wheel.setAttribute("data-rotation", degrees);
    };

    Wheel.prototype.spin = function (callback, amount) {
        var _this = this;
        clearTimeout(spinTimeout);
        modifier -= slowdownSpeed;
        if (amount === undefined) {
            amount = parseInt(wheel.getAttribute('data-rotation'));
        }
        this.rotate(amount);
        if (modifier > 0) {
            spinTimeout = setTimeout(function () {
                _this.spin(callback, amount + modifier);
            }, 1000 / 5);
        } else {
            var dataRotation = parseInt(wheel.getAttribute('data-rotation'));
            modifier = spinModifier();
            var divider = 360 / wheelValues.length;
            var wheelValue = wheelValues[Math.floor(Math.round(dataRotation % 360) / divider)];
            switch (wheelValue) {
                case 0:
                    return callback(0);
                case -1:
                    return callback("Free Spin");
                case -2:
                    return callback("Lose a turn");
                default:
                    return callback(wheelValue);
            }
        }
    };

    return Wheel;
})();

function mt_rand(min, max) {
  //  discuss at: http://phpjs.org/functions/mt_rand/
  // original by: Onno Marsman
  // improved by: Brett Zamir (http://brett-zamir.me)
  //    input by: Kongo
  //   example 1: mt_rand(1, 1);
  //   returns 1: 1

  var argc = arguments.length;
  if (argc === 0) {
    min = 0;
    max = 2147483647;
  } else if (argc === 1) {
    throw new Error('Warning: mt_rand() expects exactly 2 parameters, 1 given');
  } else {
    min = parseInt(min, 10);
    max = parseInt(max, 10);
  }
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
winObj=new Object();
	function RndUser()
	{
		console.log("opt[]:");console.log(opt);
		console.log("opt length:"+Object.keys(opt).length);

		RND = mt_rand(1, Object.keys(opt).length);
		console.log("RND:"+RND);

		tmp=opt[RND];
		console.log("opt[RND]:");console.log(tmp);

		delete opt[RND];
		
		/**********************/
			console.log("del opt["+RND+"]:");
			console.log(opt);
		var vOpt = new Object(), vI=1;
		$.each(opt, function(key, val)
		{
			vOpt[vI]=
					{
						"id":        val["id"],
						"fn":        val["fn"],
						"ln":        val["ln"],
                        "userpic":   val["userpic"],
                        "email":     val["email"],
                        "vk":        val["vk"],
                        "fb":        val["fb"]
					};
			++vI;
		});
		opt=vOpt;
		delete vOpt;
		/**********************/
	console.log("********************");
	console.log(opt);

		/*vSz=$('#users option').size();
		++vSz;

		$("#users").append($('<option>',
		{
				value: tmp["id"],
				text : vSz+' '+tmp["fn"]+' '+tmp["ln"]
		}));*/
		/*
***************************************
		*/

        vSz=$('#usr li').size();
        ++vSz;

        $("#usr").append($('<li>',
            {
                onclick:"winner('"+tmp["userpic"]+"', '"+tmp["fn"]+"', '"+ tmp["ln"]+"', '"+ tmp["vk"]+"')",
                value: tmp["id"],
                html :  "<div><img width='30' src='" + tmp["userpic"] + "' border='0'>"
                + tmp["fn"] + " " + tmp["ln"] + "</div>"
            }));

		winObj[vSz]=
			{
				"id":        tmp["id"],
				"fn":        tmp["fn"],
				"ln":        tmp["ln"],
                "userpic":   tmp["userpic"],
                "email":     tmp["email"],
                "vk":        tmp["vk"],
                "fb":        tmp["fb"]
			};
}

    function winner(ph, fn, ln, vk)
    {
        $("#result").html(
            "<a href='http://vk.com/id" + vk + "' target='_blank'>"
            + "<img width='30' src='" + ph + "' border='0'>"
            + fn + " " + ln
            + "</a>"
        );
    }

document.getElementById("start").onclick=function(){
	var wheel = new Wheel;
	wheel.spin(function(spinVal)
	{
		//alert(spinVal);
/*
		$("#result").val(
		winObj[spinVal]["fn"]
		+' '+
		winObj[spinVal]["ln"]
		+' '+
		winObj[spinVal]["id"]
		);
*/
	})
}
