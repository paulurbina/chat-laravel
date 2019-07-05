<template>
    <div>
        <li class="list-group-item" :class="inputColorMessageClass">
            <slot></slot>
            <small class="badge badge-info float-right text-white">Tú</small>
        </li>
    </div>
</template>

<script>
    export default {
      props: [
          'color',
      ],
      computed: {
          inputColorMessageClass() {
              return 'list-group-item-'+this.color
          },
      },
      mounted() {
          console.log('Component Mounted');
      }

    }
</script>
