import javax.swing.JOptionPane;

public class fracTester {

	public static void main(String[] args) {
		boolean replay = true;

		while(replay==true) {
			fraction myFraction = new fraction(JOptionPane.showInputDialog("Input your first Fraction"),JOptionPane.showInputDialog("Input your second Fraction"));	
			JOptionPane.showMessageDialog(null, "The total is:"+ "\n" + myFraction.setTotal());
			if((JOptionPane.showConfirmDialog(null,"Do you want to go again", "Again?", JOptionPane.YES_NO_OPTION))==JOptionPane.YES_OPTION) {
				replay = true;
			}
			else {
				replay = false;
			}
		}	
	}
}
