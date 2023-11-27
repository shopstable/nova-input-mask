export default function maskValue(maskSyntax, value) {
      // Create a temporary input element
      var input = document.createElement('input');

      // Apply the mask to the input element
      var mask = new Inputmask(maskSyntax);
      mask.mask(input);

      // Set the value to be masked
      input.value = value;

      // Retrieve the masked value
      var maskedValue = input.value;

      // Clean up: remove the temporary input element
      input.remove();

      return maskedValue;
}
