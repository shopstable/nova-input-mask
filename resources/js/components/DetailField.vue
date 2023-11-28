<template>
  <PanelItem :index="index" :field="field" />
</template>

<script>
import maskValue from '../maskValue'

export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
  mounted() {
      if (this.field.mask && this.field.storeRawValue) {
        this.field.value = maskValue(this.field.mask, this.field.value)
      }
  }
}
</script>
