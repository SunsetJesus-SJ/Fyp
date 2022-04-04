
<script>
export default {
  props: {
    variant: String,
    className: String,
  },
  data: () => ({
      variantCSS: 'bg-button_',
  }),
  mounted() {
    this.variantCSS += this.variant;
  },
  methods: {
     onClickHandler(event) {
        this.$emit('onClick', event);
     }
  }
}

</script>


<template>
    <button @click="onClickHandler($event)" type="button" :class="[variantCSS, className]" class="px-5 py-2 rounded-md text-white">
        <slot />
    </button>
</template>