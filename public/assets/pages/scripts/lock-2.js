var Lock = function () {

    return {
        //main function to initiate the module
        init: function () {

             $.backstretch([
		        "../assets/pages/media/bg/2jCbzFS.jpg",
    		    "../assets/pages/media/bg/230427-Grüner_See-underwater-lake-divers-Austria-sunlight-water.jpg",
    		    "../assets/pages/media/bg/Diving-in-a-beautiful-reef-1920x1080.jpg",
    		    "../assets/pages/media/bg/landscapes-cave-russia-underwater-2400x1350-wallpaper.jpg",
    		    "../assets/pages/media/bg/Penguins-Diving-HD-Wallpapers.jpg",
    		    "../assets/pages/media/bg/images (1).jpg"
		        ], {
		          fade: 1000,
		          duration: 8000
		      });
        }

    };

}();

jQuery(document).ready(function() {
    Lock.init();
});