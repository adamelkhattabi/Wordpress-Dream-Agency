jQuery(document).ready(function () {
  jQuery(".owl-first").owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    
     navText: [
      "<svg width=\"35\" height=\"34\" viewBox=\"0 0 35 34\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +  "<path d=\"M34 17C34 25.8094 26.6402 33 17.5 33C8.35978 33 1 25.8094 1 17C1 8.19057 8.35978 1 17.5 1C26.6402 1 34 8.19057 34 17Z\" stroke=\"black\" stroke-opacity=\"0.33\" stroke-width=\"2\"/>\n" +"<path d=\"M20 10L12 17.3443L20 24\" stroke=\"black\" stroke-opacity=\"0.33\" stroke-width=\"2\" stroke-linecap=\"round\"/>\n" +    "</svg>\n",
       '<svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 17C1 25.8094 8.35978 33 17.5 33C26.6402 33 34 25.8094 34 17C34 8.19057 26.6402 1 17.5 1C8.35978 1 1 8.19057 1 17Z" stroke="black" stroke-width="2"/><path d="M15 10L23 17.3443L15 24" stroke="black" stroke-width="2" stroke-linecap="round"/></svg>'],
    responsive: {
       0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
  jQuery(".owl-second").owlCarousel({
    loop: false,
    margin: 20,
    nav: true,
    
    navText: ["<svg width=\"35\" height=\"34\" viewBox=\"0 0 35 34\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +    "<path d=\"M34 17C34 25.8094 26.6402 33 17.5 33C8.35978 33 1 25.8094 1 17C1 8.19057 8.35978 1 17.5 1C26.6402 1 34 8.19057 34 17Z\" stroke=\"black\" stroke-opacity=\"0.33\" stroke-width=\"2\"/>\n" +   "<path d=\"M20 10L12 17.3443L20 24\" stroke=\"black\" stroke-opacity=\"0.33\" stroke-width=\"2\" stroke-linecap=\"round\"/>\n" +    "</svg>\n",
      "<svg width=\"35\" height=\"34\" viewBox=\"0 0 35 34\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
      "<path d=\"M1 17C1 25.8094 8.35978 33 17.5 33C26.6402 33 34 25.8094 34 17C34 8.19057 26.6402 1 17.5 1C8.35978 1 1 8.19057 1 17Z\" stroke=\"black\" stroke-width=\"2\"/>\n" +
      "<path d=\"M15 10L23 17.3443L15 24\" stroke=\"black\" stroke-width=\"2\" stroke-linecap=\"round\"/>\n" +
      "</svg>\n"],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
  // if (jQuery(".owl-carousel").hasClass("nav-active")) {
  //   if (jQuery(this).find(".owl-nav").hasClass("disabled"))
  //     jQuery(this).find(".owl-nav").removeClass("disabled");
  // :}
  jQuery(".owl-dots").addClass("disabled");
  // owl - prev;
  // owl - next;
  jQuery(".owl-prev").click(function () {
     jQuery(".owl-dots").addClass("disabled");
  });
  jQuery(".owl-next").click(function () {
    jQuery(".owl-dots").addClass("disabled");
  });
});
