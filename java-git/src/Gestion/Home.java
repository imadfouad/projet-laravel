package Gestion;


import java.awt.BorderLayout;

import java.sql.*;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JScrollPane;
import javax.swing.border.MatteBorder;
import java.awt.Color;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.JPasswordField;

public class Home extends JFrame {

	private JPanel contentPane;
	protected static  JTextField user_id;
	private JTextField admin_id;
	private JTextField admin_password;
	protected  static JTextField user_password;


	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Home frame = new Home();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Home() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 951, 595);
		contentPane = new JPanel();
		contentPane.setBorder(new MatteBorder(9, 9, 9, 9, (Color) Color.DARK_GRAY));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JPanel panel = new JPanel();
		panel.setBackground(Color.ORANGE);
		panel.setForeground(Color.ORANGE);
		panel.setBounds(10, 10, 917, 538);
		contentPane.add(panel);
		panel.setLayout(null);
		
		JPanel panel_1 = new JPanel();
		panel_1.setBackground(Color.WHITE);
		panel_1.setBounds(0, 0, 339, 283);
		panel.add(panel_1);
		panel_1.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("Username");
		lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 16));
		lblNewLabel.setBounds(175, 63, 154, 33);
		panel_1.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("Password");
		lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 16));
		lblNewLabel_1.setBounds(175, 141, 118, 33);
		panel_1.add(lblNewLabel_1);
		
		JLabel lblNewLabel_5 = new JLabel("New label");
		lblNewLabel_5.setBounds(186, 214, 129, 29);
		panel_1.add(lblNewLabel_5);
		lblNewLabel_5.setBackground(Color.WHITE);
		lblNewLabel_5.setForeground(Color.WHITE);
		
		user_id = new JTextField();
		user_id.setBounds(445, 59, 214, 39);
		panel.add(user_id);
		user_id.setColumns(10);
		
		JPanel panel_2 = new JPanel();
		panel_2.setBackground(Color.DARK_GRAY);
		panel_2.setBounds(0, 283, 917, 266);
		panel.add(panel_2);
		panel_2.setLayout(null);
		
		JLabel lblNewLabel_2 = new JLabel("Admin ");
		lblNewLabel_2.setBounds(197, 40, 147, 47);
		lblNewLabel_2.setForeground(Color.WHITE);
		lblNewLabel_2.setFont(new Font("Tahoma", Font.BOLD, 17));
		panel_2.add(lblNewLabel_2);
		
		JLabel lblNewLabel_3 = new JLabel("Password");
		lblNewLabel_3.setBounds(184, 139, 101, 29);
		lblNewLabel_3.setForeground(Color.WHITE);
		lblNewLabel_3.setFont(new Font("Tahoma", Font.BOLD, 17));
		panel_2.add(lblNewLabel_3);
		
		admin_id = new JTextField();
		admin_id.setBounds(451, 49, 214, 35);
		panel_2.add(admin_id);
		admin_id.setColumns(10);
		
		admin_password = new JTextField();
		admin_password.setBounds(451, 139, 215, 35);
		panel_2.add(admin_password);
		admin_password.setColumns(10);
		
		JButton btnNewButton_1 = new JButton("Login");
		btnNewButton_1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				try {
					Class.forName("com.mysql.jdbc.Driver");
					Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","");
					Statement stmt = con.createStatement();
					
					
					String sql = "Select * from users " ;
					
					
					ResultSet rs = stmt.executeQuery(sql);
					
					if (rs.next())
					{
						Menu_principal menu1= new Menu_principal(1);
						menu1.setVisible(true);
						JButton users = new JButton("Users");
						users.setVisible(true);
						setVisible(false);
						dispose();
					}
					
					else
					{
						
						JOptionPane.showMessageDialog(null, "Login fail");
					}
					
					
					con.close();
				}
				
				catch(Exception e1){
					System.out.print(e1);
					
				}
			}
		});
			
		btnNewButton_1.setBounds(504, 211, 85, 21);
		panel_2.add(btnNewButton_1);
		
		JButton btnNewButton = new JButton("Login");
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				try {
					Class.forName("com.mysql.jdbc.Driver");
					Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","");
					Statement stmt = con.createStatement();
					
					
					String sql = "Select * from users where user_id ='"+user_id.getText()+"' and password2 ='"+user_password.getText()+"'";
					
					
					ResultSet rs = stmt.executeQuery(sql);
					
					if (rs.next())
					{
						
						
						Menu_principal menu1= new Menu_principal(0);
						
						menu1.setVisible(true);
						JButton gestion_users = new JButton("Users");
						gestion_users.setVisible(false);
						
						setVisible(false);
						dispose();
						
					}
					
					else
					{
						JOptionPane.showMessageDialog(null, "Login fail");
					}
					
					
					con.close();
				}
				
				catch(Exception e){
					System.out.print(e);
					
				}
			}
		});
		btnNewButton.setBounds(509, 231, 85, 21);
		panel.add(btnNewButton);
		
		user_password = new JTextField();
		user_password.setBounds(445, 137, 214, 33);
		panel.add(user_password);
		user_password.setColumns(10);
	}
}
