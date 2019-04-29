import java.awt.Color;
//import java.awt.GradientPaint;
//import java.awt.Paint;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.BorderFactory;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextArea;
import javax.swing.JTextField;

public class SwingConverter implements ActionListener{
	
	
	private javax.swing.JPanel inputPanel= initInputPanel();
	private JTextField inputText;
	private JTextArea resultArea;
	private JButton enterButton;
	private JButton sEnterButton;
	private JTextField sphereInput;
	
	public SwingConverter(){
		JFrame myWindow = new JFrame("Base Converter - Created by Alex p.");
		myWindow.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		myWindow.add(inputPanel);
		myWindow.setSize(600,500);
		myWindow.setVisible(true);
	}
	
	//Paint Grad= new GradientPaint(0,0, Color.decode("#4286f4"),0,0, Color.decode("#41d3f4"));
	
	
	private JPanel initInputPanel() {
		JPanel panel = new JPanel();
		
		panel.setPreferredSize(new java.awt.Dimension(600,500));
		panel.setLayout(null);
		
		JLabel B10= new JLabel("Base 10 Converter:");
		B10.setBounds(200, 20, 150, 30);
		panel.add(B10);
		
		JLabel label= new JLabel("Enter a base-10 number");
		label.setBounds(50, 50, 220, 30);
		panel.add(label);
		
		JTextField txt; //unusual
		txt = inputText = new JTextField();
		txt.setBounds(230, 50, 100, 30);
		panel.add(txt);
		
		JButton button = new JButton("Enter");
		button.setActionCommand("Enter");
		button.setBounds(340, 50, 80, 30);
		button.addActionListener(this);
		panel.add(button);
		enterButton = button;
		
		button= new JButton("Reset");
		button.setActionCommand("Reset");
		button.setBounds(430, 50, 80, 30);
		button.addActionListener(this);
		panel.add(button);
		
		JLabel SphereCalc= new JLabel("Sphere Calculator");
		SphereCalc.setBounds(200, 100, 150, 30);
		panel.add(SphereCalc);
		
		JLabel sphereLabel = new JLabel("Enter the radius of the sphere");
		sphereLabel.setBounds(50, 125, 300, 30);
		panel.add(sphereLabel);
		
		JTextField sptxt; //unusual
		sptxt = sphereInput = new JTextField();
		sphereInput.setBounds(260, 125, 100, 30);
		panel.add(sptxt);
		
		JButton sphereEnter= new JButton("Enter");
		sphereEnter.setActionCommand("SEnter");
		sphereEnter.setBounds(370, 125, 80, 30);
		sphereEnter.addActionListener(this);
		panel.add(sphereEnter);
		sEnterButton= button;
		
		JButton sphereReset = new JButton("Reset");
		sphereReset.setActionCommand("SReset");
		sphereReset.setBounds(460, 125, 80, 30);
		sphereReset.addActionListener(this);
		panel.add(sphereReset);
		
		
		resultArea = new JTextArea();
		resultArea.setBounds(50, 200, 500, 200);
		resultArea.setEditable(false);
		resultArea.setBackground(Color.decode("#4286f4"));
		panel.add(resultArea);
		
		panel.setBackground(Color.decode("#41d3f4"));
		panel.setBorder(BorderFactory.createDashedBorder(Color.decode("#2da7d8"),10,5));
		return panel;
	}
	
	private void showResult() {
		String hexUpperCase;
		inputText.setEnabled(false);
		enterButton.setEnabled(false);
		
		Integer n= getInputNumber();
		if (n == null) {
			resultArea.append("Invalid Number");
			return;
		}
		int baseTen = n.intValue();
		resultArea.append("Base Ten= " + baseTen + "\n");
		resultArea.append("Binary = " + Integer.toString(baseTen, 2) + "\n");
		resultArea.append("Octal = "+ Integer.toString(baseTen, 8)+"\n");
		resultArea.append("Hexadecimal = " + Integer.toString(baseTen, 16)+"\n");
		
		hexUpperCase = Integer.toString(baseTen, 16).toUpperCase();
		resultArea.append("Hexadecimal = " + hexUpperCase + "\n");
	}
	
	private void sphereResult() {
		Integer sn= getSphereInputNumber();
		if (sn == null) {
			resultArea.append("Invalid Number");
			return;
		}
		int radius = sn.intValue();
		double sArea = 4*Math.pow(radius,2)*Math.PI;
		double vol = (4.0/3.0)*Math.PI*Math.pow(radius, 3);
		resultArea.append("Surface Area = " +sArea+ "\n");
		resultArea.append("Volume = " + vol );
	}
	
	
	private Integer getInputNumber() {
		try {
			Integer n= Integer.parseInt(inputText.getText());
			return n;
		} catch (Exception e) {
			//Problem with num entry
			//Traps error, tell user error and try again
			return null;
		}
	}
	private Integer getSphereInputNumber() {
		try {
			Integer sn= Integer.parseInt(sphereInput.getText());
			return sn;
		} catch (Exception e) {
			//Problem with num entry
			//Traps error, tell user error and try again
			return null;
		}
	}

	private void doReset() {
		inputText.setText("");
		resultArea.setText("");
		inputText.setEnabled(true);
		enterButton.setEnabled(true);
		inputText.requestFocus();
	}
	

	private void SphereReset() {
		sphereInput.setText("");
		resultArea.setText("");
		sphereInput.setEnabled(true);
		sEnterButton.setEnabled(true);
		sphereInput.requestFocus();
	}
	public static void main(String[] args) throws Exception{
		new SwingConverter();    //Shorthand for SwingConverter baseConverter = new SwingConverter(); but less effective and adaptable.
		
	}

	@Override
	public void actionPerformed(ActionEvent ev) {
		String command = ev.getActionCommand();
		if (command.equals("Enter")) {
			showResult();
		}
		else if (command.equals("Reset")) {
			doReset();
		}
		else if (command.equals("SEnter")) {
			sphereResult();
		}
		else if (command.equals("SReset")) {
			SphereReset();
		}
	}
	
}
