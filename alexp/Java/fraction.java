import javax.swing.JOptionPane;

/**
 * Using string operators, add fractions, learning javadocs. 
 * Pull out numerator and denominator with string methods.
 * Use common denominator to add, then reduce to lowest common denominator.
 * 
 * @author Alex P.
 *
 */
public class fraction {
	// field
	/**
	 * Numerators and denominators drawn from input through string methods
	 */
	private int numer;
	private int denom;
	private int numer1;
	private int denom1;
	/**
	 * numerators and denominator drawn after using common denominator
	 */
	private int TotalN1;
	private int TotalD;
	private int TotalN2;
	/**
	 * Numerator added together and numerator and denominator in array after using Lowest Common Denominator 
	 */
	private int TotalNumer;
	private int lowest;
	/**
	 * Defines separator for the final fraction
	 */
	private String seperator;

	//constructor
	/**
	 * Constructor that passes each fraction from the input and searches for the divisor mark, separatorLoc
	 * @param passFraction
	 * @param passFraction1
	 */
	String options[] = {"Add", "Sub", "Mult", "Div"};
	int select = JOptionPane.showOptionDialog(null, "Select your operation", "Click a button", JOptionPane.DEFAULT_OPTION, JOptionPane.INFORMATION_MESSAGE, null, options, options[0] );
	public fraction(String passFraction, String passFraction1) {
		int separatorLoc = passFraction.indexOf("/");
		String strNumer = passFraction.substring(0, separatorLoc);
		String strDenom = passFraction.substring(separatorLoc+1);
	/**
	 * Section that defines the numerator and denominator for each fraction and converts them from a string to an int
	 */
		this.numer = Integer.parseInt(strNumer);
		this.denom = Integer.parseInt(strDenom);
		int separatorLoc1 = passFraction1.indexOf("/");
		String strNumer1 = passFraction1.substring(0, separatorLoc1);
		String strDenom1 = passFraction1.substring(separatorLoc1+1);
		this.numer1 = Integer.parseInt(strNumer1);
		this.denom1 = Integer.parseInt(strDenom1);
	/**
	 * Variables that calculate the common denominator and applies that to both the numerator and denominator
	 * This calculates a total numerator and denominator for the answer fraction
	 */
		TotalN1 = numer*denom1;
		TotalD = denom*denom1;
		TotalN2 = numer1* denom;
	/**
	 * Determines based on selection what function to use addition, subtraction, multiplication, division
	 */
		if(select == 0) {
			// add
			TotalNumer = TotalN1+TotalN2;
		}
		else if (select == 1) {
			// sub
			TotalNumer = TotalN1-TotalN2;
		}
		else if (select == 2) {
			// mult
			TotalNumer = numer * numer1;
			TotalD = denom * denom1;
		}
		else if (select == 3) {
			//div
			TotalNumer = numer * denom1;
			TotalD = denom * numer1;
		}
		LCD();
		CreateSep();
		setTotal();
	}
	
	//methods
	/**
	 * sets and sends final answer to fracTester class used in JOp output message
	 * @return answer
	 */
	public String setTotal(){
		String answer =  " " + TotalNumer + "\n" +seperator+"\n"+ " " + TotalD;
		return answer;
	}
	/**
	 * Creates a separator for the JOp pane to display at the end by adding two to the length of the largest number
	 * and then adding that many dashes to the separator.
	 * @return separator
	 */
	public String CreateSep() {
		seperator = "";
		int len=0;
		if(Integer.toString(TotalNumer).length()<Integer.toString(TotalD).length()) {
			len=Integer.toString(TotalD).length()+2;
		}
		else {
			len=Integer.toString(TotalNumer).length()+2;
		}
		for(int c=0;c<=len;c++) { 
			seperator += "-";
		}
		return seperator;
	}
	/**
	 * Finds lowest common denominator by finding the lowest number in the fraction
	 * runs a loop until that number is reached and finds the largest divisor common to both the numerator and denominator
	 * Divides the total numerator and denominator by that amount
	 */
	public void LCD() {
		lowest = 0;
		int divisor = 0;
		if (this.TotalNumer>this.TotalD) {
			lowest = this.TotalD;
		}
		else if(this.TotalNumer<this.TotalD) {
			lowest = this.TotalNumer;
		}
		for (int n=1;n<=lowest;n++) {
			if(this.TotalNumer%n == 0) {
				if(this.TotalD % n == 0) {
					divisor=n;
				}
			}
		}
		TotalNumer = this.TotalNumer / divisor;
		TotalD = this.TotalD / divisor;

	}
}
