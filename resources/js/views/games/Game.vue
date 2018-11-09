<template>
<div>

<v-flex pb-2>
   <v-alert
      v-model="alert"
      dismissible
      type="success"
    >
      {{ alertMessage }}
    </v-alert>
</v-flex>    


  <v-data-table
    :headers="headers"
    :items="jeux"
    :loading="loadingstate"
    :pagination.sync="pagination"
    class="elevation-1"
    
    
  >
  <v-progress-linear slot="progress" color="blue" indeterminate></v-progress-linear> 
    <template slot="items" slot-scope="props">
      <td>{{ props.item.name }}</td>
      <td class="text-xs-left">{{ props.item.release_date }}</td>
      <td class="text-xs-left">{{ props.item.platforms.name }}</td>
      <td class="text-xs-left">{{ props.item.is_finished }}</td>
      <td class="text-xs-left">{{ props.item.created_at }}</td>
      
    </template>
  </v-data-table>

   <AddGame @sendinfo="getInfo"></AddGame>   

 </div>  

</template>

<script>

import AddGame from './Add_game.vue'

  export default {
    components : {
       AddGame
    },
    data () {
      return {
        headers: [
          {
            text: 'Nom',
            align: 'left',
            value: 'name'
          },
          { text: 'Sortie', value: 'release_date' },
          { text: 'Platforme', value: 'platform' },
          { text: 'Jeu terminé' , value:'is_finished' },
          { text: 'Ajouté le' , value:'created_at' }

        ],

        jeux : [],

        loadingstate : true,
        alert : false,
        alertMessage : '',
        pagination : {
                        rowsPerPage: 10, // -1 for All
                      }
       
      }
    } , 

     mounted()
     {
        axios.get('/api/games')
        .then((response) => this.jeux = response.data)
        .then( () => this.loadingstate = false)
        .catch(function (error) {
        })


     },


     methods : {

                 getInfo(value)
                 {
                   this.alert = value.status
                   this.alertMessage = value.message
                   this.jeux.push(value.data)
                 }
     }

  }
</script>
