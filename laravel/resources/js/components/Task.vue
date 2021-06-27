<template>
    <div>

      <div
        class="task"
        data-toggle="modal"
        :data-target="'#myModal' + id"
      >
        {{id}} - {{title}}
      </div>

      <!-- scheda popup-->
      <div
        :id="'myModal' + id"
        class="modal fade"
        role="dialog"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                {{id}} - {{title}}
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{note}}
            </div>
          </div>
        </div>
      </div>

    </div>

</template>

<script>
    export default {
      props: {
        id: Number,
        title: String,
        note: String
      }
    }
</script>
