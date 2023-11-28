export default function maskValue(maskSyntax, value) {
      // Create a temporary input element
      let input = document.createElement('input');

      // Apply the mask to the input element
      let mask = new Inputmask(maskSyntax);
      mask.mask(input);

      // Set the value to be masked
      input.value = value;

      // Retrieve the masked value
      let maskedValue = input.value;

      // Clean up: remove the temporary input element
      input.remove();

      return maskedValue;
}
