$(document).ready(function() {
  (function($) {
    'use strict';

    jQuery.validator.addMethod(
      'answercheck',
      function(value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value);
      },
      'type the correct answer -_-'
    );

    // validate contactForm form
    $(function() {
      $('#contactForm').validate({
        rules: {
          name: {
            required: true,
            minlength: 5
          },
          subject: {
            required: true,
            minlength: 4
          },
          number: {
            required: true,
            minlength: 5
          },
          email: {
            required: true,
            email: true
          },
          company_name: {
            required: true,
            minlength: 5
          },
          company_address: {
            required: true,
            minlength: 10
          },
          your_message: {
            required: true,
            minlength: 10
          }
        },
        messages: {
          name: {
            required: "come on, you have a name, don't you?",
            minlength: 'your name must consist of at least 5 characters'
          },
          subject: {
            required: 'please include a subject to this ',
            minlength: 'your subject must consist of at least 4 characters'
          },

          company_name: {
            required:
              'come on, How will i know the company that wants to hire me?',
            minlength: 'your company name is more than 5 characters right?'
          },
          company_address: {
            required: 'Please, the location of your company matters',
            minlength: 'please add more details of the location'
          },
          number: {
            required: 'Please your number is important',
            minlength: 'your Number must consist of at least 5 characters'
          },
          email: {
            required: 'no email, no message'
          },
          your_message: {
            required: ' you have to write something to send this form.',
            minlength: 'thats all? really?'
          }
        }
      });
    });
  })(jQuery);
});
