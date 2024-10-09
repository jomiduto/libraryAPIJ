import AirDatepicker from 'air-datepicker';
import localeEs from 'air-datepicker/locale/es';
import 'air-datepicker/air-datepicker.css';

new AirDatepicker('#birthdate', {
    locale: localeEs,
    buttons: ['today', 'clear']
})
