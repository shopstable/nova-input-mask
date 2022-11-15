import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-nova-inputmask', IndexField)
  app.component('detail-nova-inputmask', DetailField)
  app.component('form-nova-inputmask', FormField)
})
