const App = new Vue (
  {
    el: '#app',
    created() {
      axios.get('http://localhost:8888/php-snacks-b1/server/controller.php')
        .then((result) => {
          console.log(result);
        })
          .catch((error) => {
            console.log(error);
          })
    },
  }
)