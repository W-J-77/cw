<!DOCTYPE html>
<html>
<head>
  <title>Keepers</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <h1>Stalls</h1>
  <div id="root">
    <ul>
      <li v-for="stall in stalls">@{{ stall.name }}</li>
    </ul>
    
    <h2>New Stall</h2>
    Stall name: <input type="text" id="input" v-model="newStallName">
    <button @click="createStall">Create</button>
  </div>

  <script>
    var app = new Vue({
      el: "#root",
      data:{
        stalls: [],
        newStallName: '',
      },
      mounted() {
        axios.get("{{ route ('api.stalls.index') }}")
        .then(response =>{
          //handle success
          this.stalls = response.data;
        })
        .catch(response =>{
          //handle errors
          console.log(response);
        })
      },
      methods: {
        createStall: function() {
          axios.post("{{ route ('api.stalls.store') }}",{
            name: this.newStallName
          })
          .then(response => {
            //handle success
            this.stalls.push(response.data);
            this.newStallName = '';
          })
          .catch(response =>{
            //handle errors
            console.log(response);
          })
        }
      }
    });
  </script>
</body>
</html>
