const App = new Vue (
  {
    el: '#app',
    data: {
      carsAvailable: [],
    },
    created() {
      axios.get('http://localhost:8888/php-snacks-b1/server/controller.php')
        .then((result) => {
          this.carsAvailable = result.data;
          console.log(result);
        })
          .catch((error) => {
            console.log(error);
          })
    },
  }
)