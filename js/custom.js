$(document).ready(function(){

        var data = {
            "ale": [
                "AWS", "AWS DevOps Engineer", "Advanced Networking Speciality", "Affiliate Marketing Professional", "Apache Spark And Scala",
                "Aws Developer Associate", "AWS Solutions Architect Associate", "AWS SysOps Administrator Associate", "Bigdata Architect", "Bigdata Speciality",
                "Bigdata And Hadoop", "Blockchain", "CAPM", "Certified Android App Developer", "Certified ios App Developer", "Cobit5", "Corporate Sales Expert" ,"Corporate Sales Fundamental", "Corporate Sales Professional", "Corporate Sales Specialist", "Digital Marketing Expert", "Digital Marketing Fundamental", "Digital Marketing Professional", "Digital Marketing Specialist", "Email Marketing Professional", "Expert Scrum Master Certified", "Hadoop Administration", "ITIL", "ITILV3 Blended", "ITILV3 IntermediateCSI", "ITILV3 IntermediateOSA", "ITILV3 IntermediateST", "ITILV4 Foundation", "Java", "Lean Six Sigma Black Belt", "Marketing Research Expert", "Marketing Research Fundamental", "Marketing Research Professional", "Marketing Research Specialist", "Marketing Strategy Expert", "Marketing Strategy Fundamental", "Marketing Strategy Professional", "Marketing Strategy Specialist", "MSP", "NodeJs", "php", "PMI ACP", "Pmp",
                  "Prince2", "Prince2 Foundation", "Prince2 Practitioner", "Python", "Python Spark Using Pyspark", "Scrum Agile Master Certified", "Scrum Developer Certification", "Search Engine Optimization Professional", "Security Speciality", "Selenium", "Scrum Fundamental Certified", "Scrum Master Certified","Social Media Marketing Professional","Scrum Product Owner Certified", "Six Sigma Black Belt", "Six Sigma Green Belt", "Scaled Scrum Master Certified", "Scaled Scrum Product Owner Certified", "Six Sigma Yellow Belt", "Web Analytics Professional"
            ]
        };

        typeof $.typeahead === 'function' && $.typeahead({
            input: ".js-typeahead",
            minLength: 1,
            maxItem: 8,
            offset: true,
            order: "asc",
            hint: true,
            maxItemPerGroup: 8,
            href: "http://localhost/gurjinder-singh/common-header/{{display|slugify}}",
            dropdownFilter: "all beers",
            emptyTemplate: 'No result for "{{query}}"',
            source: {
                Ale: {
                    data: data.ale
                }
            },
            callback: {
                onReady: function (node) {
                    this.container.find('.' + this.options.selector.dropdownItem + '.group-ale a').trigger('click')
                },
                onDropdownFilter: function (node, query, filter, result) {
                    console.log(query)
                    console.log(filter)
                    console.log(result)
                }
            },
            debug: true
        });
// typeahead.js ends

// owl carousel starts
    $('.course-categories-slider').owlCarousel({
        loop:false,
        autoplay:false, 
        dots:false,
        nav:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

$('.owl-carousel').on('click','a',function(){
        // $(this).addClass('active').siblings().removeClass('active');
        $(this).removeClass('active').siblings().addClass('active');

});
//owl carousel ends 

//bottom to top scroll button starts
  var windowH = $(window).height()/2;

    $(window).on('scroll',function(){
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css('display','flex');
        } else {
            $("#myBtn").css('display','none');
        }
    });

    $('#myBtn').on("click", function(){
        $('html, body').animate({scrollTop: 0}, 300);
    });
// bottom to top scroll button ends

//to close the navbar with close button starts
  $('#closeNav').on('click', function(){
    $('.navbar-collapse').collapse('hide');
  });
//to close the navbar with close button ends


});
