import java.awt.Color;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.BorderFactory;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JTextField;

public class Calculator implements ActionListener{
		// class vars, instance vars, field vars (all the same)
		JFrame frame;
		JTextField textField;
		JButton b1,b2,b3,b4,b5,b6,b7,b8,b9,b0,bdec,badd,bsub,bmul,bdiv,beq,bclr,bksp,bsqr,bcbe,bsqt,blog;
		
		double firstNumber;
		double secondNumber;
		double result;
		int operator;
		
		
		// constructors
		
		public Calculator(){
			frame = new JFrame("Calculator, By Alex P.");
			frame.setLayout(null);
			
			textField = new JTextField();
			textField.setBounds(30,40,410,30);
			frame.getContentPane().setBackground(Color.decode("#77eacf"));
			frame.add(textField);
			
			frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
			frame.setResizable(false);
			frame.setSize(500, 400);
			frame.setVisible(true);
			
			b1 = new JButton("1");
			b1.setBounds(40, 240, 50, 40);
			b1.setBackground(Color.decode("#c14830"));
			frame.add(b1);
			
			b4 = new JButton("4");
			b4.setBounds(40, 180, 50, 40);
			b4.setBackground(Color.decode("#c14830"));
			frame.add(b4);
			
			b7 = new JButton("7");
			b7.setBounds(40, 120, 50, 40);
			b7.setBackground(Color.decode("#c14830"));
			frame.add(b7);
			
			b2 = new JButton("2");
			b2.setBounds(110, 240, 50, 40);
			b2.setBackground(Color.decode("#c14830"));
			frame.add(b2);
			
			b5 = new JButton("5");
			b5.setBounds(110, 180, 50, 40);
			b5.setBackground(Color.decode("#c14830"));
			frame.add(b5);
			
			b8 = new JButton("8");
			b8.setBounds(110, 120, 50, 40);
			b8.setBackground(Color.decode("#c14830"));
			frame.add(b8);
			
			b3 = new JButton("3");
			b3.setBounds(180, 240, 50, 40);
			b3.setBackground(Color.decode("#c14830"));
			frame.add(b3);
			
			b6 = new JButton("6");
			b6.setBounds(180, 180, 50, 40);
			b6.setBackground(Color.decode("#c14830"));
			frame.add(b6);
			
			b9 = new JButton("9");
			b9.setBounds(180, 120, 50, 40);
			b9.setBackground(Color.decode("#c14830"));
			frame.add(b9);
			
			b0 = new JButton("0");
			b0.setBounds(110, 300, 50, 40);
			b0.setBackground(Color.decode("#c14830"));
			frame.add(b0);
			
			bdec = new JButton(".");
			bdec.setBounds(40, 300, 50, 40);
			bdec.setBackground(Color.decode("#c14830"));
			frame.add(bdec);
			
			beq = new JButton("=");
			beq.setBounds(180, 300, 50, 40);
			beq.setBackground(Color.decode("#45b6d8"));
			frame.add(beq);
			
			badd = new JButton("+");
			badd.setBounds(250, 300, 50, 40);
			badd.setBackground(Color.decode("#45b6d8"));
			frame.add(badd);
			
			bsub = new JButton("-");
			bsub.setBounds(250, 240, 50, 40);
			bsub.setBackground(Color.decode("#45b6d8"));
			frame.add(bsub);
			
			bmul = new JButton("*");
			bmul.setBounds(320, 300, 50, 40);
			bmul.setBackground(Color.decode("#45b6d8"));
			frame.add(bmul);
			
			bdiv = new JButton("/");
			bdiv.setBounds(320, 240, 50, 40);
			bdiv.setBackground(Color.decode("#45b6d8"));
			frame.add(bdiv);
			
			bksp = new JButton("Backspace");
			bksp.setBounds(250, 120, 120, 40);
			bksp.setBackground(Color.decode("#000000"));
			bksp.setForeground(Color.white);
			frame.add(bksp);
			
			bclr = new JButton("Clear");
			bclr.setBounds(250, 180, 120, 40);
			bclr.setBackground(Color.decode("#000000"));
			bclr.setForeground(Color.white);
			frame.add(bclr);
			
			bsqr = new JButton("X^2");
			bsqr.setBounds(390, 300, 100, 40);
			bsqr.setBackground(Color.decode("#4ba384"));
			frame.add(bsqr);
			
			bcbe = new JButton("X^3");
			bcbe.setBounds(390, 240, 100, 40);
			bcbe.setBackground(Color.decode("#4ba384"));
			frame.add(bcbe);
			
			bsqt = new JButton("Sq. Root");
			bsqt.setBounds(390, 180, 100, 40);
			bsqt.setBackground(Color.decode("#4ba384"));
			frame.add(bsqt);
			
			blog = new JButton("Log(10)");
			blog.setBounds(390, 120, 100, 40);
			blog.setBackground(Color.decode("#4ba384"));
			frame.add(blog);

			b1.addActionListener(this);
			b2.addActionListener(this);
			b3.addActionListener(this);
			b4.addActionListener(this);
			b5.addActionListener(this);
			b6.addActionListener(this);
			b7.addActionListener(this);
			b8.addActionListener(this);
			b9.addActionListener(this);
			b0.addActionListener(this);
			bdec.addActionListener(this);
			beq.addActionListener(this);
			badd.addActionListener(this);
			bsub.addActionListener(this);
			bmul.addActionListener(this);
			bdiv.addActionListener(this);
			bksp.addActionListener(this);
			bclr.addActionListener(this);
			bsqr.addActionListener(this);
			bcbe.addActionListener(this);
			bsqt.addActionListener(this);
			blog.addActionListener(this);
		}
		
		// listener -- waits for event 
		@Override
		public void actionPerformed(ActionEvent e) {
			if(e.getSource() == b1) {
				textField.setText(textField.getText().concat("1"));
			}
			if(e.getSource() == b2) {
				textField.setText(textField.getText().concat("2"));
			}
			if(e.getSource() == b3) {
				textField.setText(textField.getText().concat("3"));
			}
			if(e.getSource() == b4) {
				textField.setText(textField.getText().concat("4"));
			}
			if(e.getSource() == b5) {
				textField.setText(textField.getText().concat("5"));
			}
			if(e.getSource() == b6) {
				textField.setText(textField.getText().concat("6"));
			}
			if(e.getSource() == b7) {
				textField.setText(textField.getText().concat("7"));
			}
			if(e.getSource() == b8) {
				textField.setText(textField.getText().concat("8"));
			}
			if(e.getSource() == b9) {
				textField.setText(textField.getText().concat("9"));
			}
			if(e.getSource() == b0) {
				textField.setText(textField.getText().concat("0"));
			}
			if(e.getSource() == bdec) {
				textField.setText(textField.getText().concat("."));
			}
			if(e.getSource() == bclr) {
				textField.setText("");
			}
			if(e.getSource() == bksp) {
				textField.setText(textField.getText().substring(0,textField.getText().length()-1));
			}
			/**
			if(e.getSource() == badd) {
				textField.setText(textField.getText().concat("+"));
			}
			if(e.getSource() == bsub) {
				textField.setText(textField.getText().concat("-"));
			}
			if(e.getSource() == bmul) {
				textField.setText(textField.getText().concat("*"));
			}
			if(e.getSource() == bdiv) {
				textField.setText(textField.getText().concat("/"));
			}
			if(e.getSource() == blog) {
				textField.setText(textField.getText().concat("log("));
			}
			if(e.getSource() == bsqt) {
				textField.setText(textField.getText().concat("\u221a"));
			}
			if(e.getSource() == bsqr) {
				textField.setText(textField.getText().concat("\u00b2"));
			}
			if(e.getSource() == bcbe) {
				textField.setText(textField.getText().concat("\u00b3"));
			}
			**/
			if(e.getSource() == badd) {
				firstNumber = Double.parseDouble(textField.getText());
				operator= 1;
				textField.setText("");
			}
			if(e.getSource() == bsub) {
				firstNumber = Double.parseDouble(textField.getText());
				operator= 2;
				textField.setText("");
			}
			if(e.getSource() == bmul) {
				firstNumber = Double.parseDouble(textField.getText());
				operator= 3;
				textField.setText("");
			}
			if(e.getSource() == bdiv) {
				firstNumber = Double.parseDouble(textField.getText());
				operator= 4;
				textField.setText("");
			}
			if(e.getSource() == bsqt) {
				firstNumber = Double.parseDouble(textField.getText());
				result = Math.sqrt(firstNumber);
				textField.setText(""+result);
			}
			if(e.getSource() == bsqr) {
				firstNumber = Double.parseDouble(textField.getText());
				result = Math.pow(firstNumber, 2);
				textField.setText(""+result);
			}
			if(e.getSource() == bcbe) {
				firstNumber = Double.parseDouble(textField.getText());
				result = Math.pow(firstNumber, 3);
				textField.setText(""+result);
			}
			if(e.getSource() == blog) {
				firstNumber = Double.parseDouble(textField.getText());
				result = Math.log10(firstNumber);
				textField.setText(""+result);;
			}
			if(e.getSource() == beq) {
				secondNumber= Double.parseDouble(textField.getText());
				switch(operator){
				case 1:
					result = firstNumber + secondNumber;
					break;
				case 2:
					result = firstNumber - secondNumber;
					break;
				case 3:
					result = firstNumber * secondNumber;
					break;
				case 4:
					result = firstNumber / secondNumber;
					break;
				default: result = 0;
				}
				textField.setText(""+result);
			}
		

			
		}
	} // end of calculator

