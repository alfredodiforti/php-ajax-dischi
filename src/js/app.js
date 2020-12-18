import Vue from 'vue';
import axios from 'axios'; 

const app = new Vue ({
    el: '#app',
    data: {
        datab: [],
    },
    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/scripts/json-script.php')
  .then(response => {
    // handle success
    console.log(response.data );
    this.datab = response.data;
  })
  .catch( error => {
    // handle error
    console.log(error);
  });

    }

});