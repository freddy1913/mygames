<template>
<div>
  <v-data-table
    :headers="headers"
    :items="jeux"
    hide-actions
    class="elevation-1"
  >
    <template slot="items" slot-scope="props">
      <td>{{ props.item.name }}</td>
      <td class="text-xs-left">{{ props.item.release_date }}</td>
      <td class="text-xs-left">{{ props.item.platforms.name }}</td>
      <td class="text-xs-left">{{ props.item.is_finished }}</td>
      <td class="text-xs-left">{{ props.item.created_at }}</td>
      
    </template>
  </v-data-table>

   <AddGame></AddGame>   

 </div>  

</template>

<script>

import AddGame from './game/AddGameComponent.vue'

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

        jeux : []
       
      }
    } , 

     mounted()
     {
        axios.get('/api/games')
        .then(response => this.jeux = response.data)
        .catch(function (error) {
        })
     }

  }
</script>
