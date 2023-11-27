<template>
  <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText">
    <template #field>
      <input
        :id="field.attribute"
        type="text"
        class="w-full form-control form-input form-input-bordered"
        :class="errorClasses"
        :placeholder="field.name"
        v-model="value"
      />
    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import Inputmask from "inputmask"

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      this.value = (this.field.storeRawValue) ? input.inputmask.unmaskedvalue() : this.value

      formData.append(this.field.attribute, this.value || '')
    },

    maskField() {
      const field = document.getElementById(this.field.attribute)
      
      new Inputmask(this.field.mask).mask(field);
    }
  },

  mounted() {
    if (this.field.mask) {
      this.maskField()   
    }

    if (this.field.phone_number && this.field.country == 'TM') {
      let im = new Inputmask("+(\\9\\93)-69-99-99-99");
      im.mask(document.getElementById(this.field.attribute));
    }

  }
}
</script>
