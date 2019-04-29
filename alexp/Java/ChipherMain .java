import javax.swing.JOptionPane;

public class Main {

	public static void main(String[] args) {
		Cipher Ccipher = new Cipher();
		// ask if encrypt or decrypt
		int again = 0;
		String ED = "n";
		while (again == 0) {
			while (ED != "E" || ED != "D") {
				ED = Ccipher.getED();
				break;
			}
			switch (ED) {
				case "E": ;
					Ccipher.getPlainText();
					Ccipher.getKey();
					Ccipher.encrypt();;
					break;
				case "D":
					Ccipher.getPlainText();
					Ccipher.getKey();
					Ccipher.decrypt();
					break;
				default:
					//System.out.println("Invalid. Try again");
					JOptionPane.showMessageDialog(null, "Invalid response. Try again.");
					break;
			}
			again = JOptionPane.showConfirmDialog(null, "Again?");
			if(again == 1) {
				break;
			}
		}
	}
}
