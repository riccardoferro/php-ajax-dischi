/********** CODE MAIN *********/

/********** VUE JS *********/

const app = new Vue(
  {
  
    el: "#app",
  
    data() {

            return {
              albums: [],
            }
    },
    mounted(){

      axios.get("http://localhost/PHP_Projects_Boolean/php-ajax-dischi/data/apiDischi.php").then((response)=>{
        // console.log(response);
        if(response.status === 200){
          this.albums = response.data;
          // console.log(this.albums);
        }
      }).catch(error => console.log(error));

    }
    
  
  });

/********** VUE JS *********/
