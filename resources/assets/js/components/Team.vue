<template>

    <div>   
        
      <input class="form-control" id="" type="text" placeholder="Search.." /><br/>
  
      <div class="row">

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" v-for="member in members">
          <div class="card h-100">
            <div class="card-body">
              <img class="rounded-circle img-fluid d-block mx-auto" src="" alt=""/>
              <div class="card-img-overlay">
                <h6 class="card-title">{{ member.title }}</h6>
              </div>
              <h6 class="card-title text-center"><span class="text-uppercase">{{ member.lastname }}</span> {{ member.firstname }}</h6>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">{{ member.matricule }}</li>
                <li class="list-group-item text-center">{{ member.birthday }}</li>
                <li class="list-group-item text-center">{{ member.garde }}</li>
                <li class="list-group-item text-center">{{ member.funct }}</li>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </div>

</template>

<script>
    
    class Member {
      constructor( title ,lastname, firstname, matricule, birthday, garde, funct) {
        this.title = title;
        this.lastname = lastname;
        this.firstname = firstname;
        this.matricule = matricule;
        this.birthday = birthday;
        this.garde = garde;
        this.funct = funct;
      }
    }

    export default {
        data(){
            return{
                search: '',
                members:[
                    new Member( 'F', 'Van Houtte', 'Benoit', '440178522', '29/09/1967', 'CDP', 'Directeur' ),
                    new Member( 'F', 'Van Houtte', 'Benoit', '440178522', '29/09/1967', 'CDP', 'Directeur' ),
                ]
            }
        },
        mounted() {
            console.log('Component Team mounted...');
        },

        computed: {
        },

        methods:{
        }
    }
</script>