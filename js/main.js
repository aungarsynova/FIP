import ContactForm from './/components/ContactForm.js'; 
import SplashSection from './/components/SplashSection.js'; 
import OurMission from './/components/OurMission.js';
import Partnership from './/components/Partnership.js';
import Stories from './/components/Stories.js';


const vm = new Vue({
    data: {
      storyList: []
    },
    methods: {
      fetchUserData() {
        let url = "./admin/scripts/stories.php";

        fetch(url)
          .then(res => res.json())
          .then(data => { this.storyList = data})
          .catch(function(error) {
              console.error(error);
          });
      }

    },
    mounted: function() {
       this.fetchUserData();
    },
  
    components: {
        contactform: ContactForm,
        splash: SplashSection,
        mission: OurMission,
        partnership: Partnership,
        stories: Stories
    }

    

}).$mount("#app");

  var mySidebar = document.getElementById("mySidebar");
  
  function w3_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
    } else {
      mySidebar.style.display = 'block';
    }
  }
  
  // Close the sidebar with the close button
  function w3_close() {
      mySidebar.style.display = "none";
  }