package Gestion ; 

import java.awt.CardLayout;
import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Vector;
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JLayeredPane;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JSeparator;
import javax.swing.JTable;
import javax.swing.JTextField;
import javax.swing.border.MatteBorder;
import javax.swing.table.DefaultTableModel;

import com.mysql.jdbc.ResultSetMetaData;

 
 

public class Gestion_client extends JFrame   {
	
	

	public JPanel contentPane;
	public JLayeredPane layeredPane ; 
	private JTextField nom_client_check;
	private JTextField field_client;
	private JTextField field_nom;
	private JTextField field_adresse;
	private JTextField field_gsm;
	private JTextField field_cin;
	private JTextField modifier_code;
	private JTextField modifier_nom;
	private JTextField modifier_adresse;
	private JTextField modifier_gsm;
	private JTextField modifier_permis;
	private JTextField modifier_cin;
	private int code ; 
	private String nom ; 
	private String adresse ; 
	private int gsm ; 
	private int permis ;
	private int Cin ; 
	
	 
	
	
	
	
	
	
	
	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Gestion_client frame = new Gestion_client();
					frame.setVisible(true);
					

				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}
	
	
	public   Gestion_client() {
	
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 692, 653);
		contentPane = new JPanel();
		contentPane.setForeground(Color.ORANGE);
		contentPane.setBackground(Color.WHITE);
		contentPane.setBorder(new MatteBorder(3, 3, 3, 3, (Color) new Color(0, 0, 0)));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("Clients");
		lblNewLabel.setBounds(287, 22, 293, 44);
		lblNewLabel.setFont(new Font("Tahoma", Font.BOLD | Font.ITALIC, 22));
		contentPane.add(lblNewLabel);
		
		JSeparator separator = new JSeparator();
		separator.setBounds(10, 97, 342, -4);
		contentPane.add(separator);
		
		JSeparator separator_1 = new JSeparator();
		separator_1.setBounds(10, 77, 658, 2);
		contentPane.add(separator_1);
		
		JButton btnNewButton_3 = new JButton("Menu");
		btnNewButton_3.setBounds(40, 552, 149, 37);
		contentPane.add(btnNewButton_3);
		btnNewButton_3.setFont(new Font("Tahoma", Font.BOLD, 15));
		
		JButton btn_ajouter = new JButton("Ajouter");
		
		btn_ajouter.setBounds(40, 97, 142, 37);
		
		
		btn_ajouter.setFont(new Font("Tahoma", Font.BOLD, 15));
		contentPane.add(btn_ajouter);
		
		JButton btn_recherche = new JButton("Modifier");
		
		btn_recherche.setBounds(257, 97, 125, 37);
				btn_recherche.setFont(new Font("Tahoma", Font.BOLD, 15));
		contentPane.add(btn_recherche);
		
		JButton btn_liste = new JButton("Liste");
		btn_liste.setBounds(495, 97, 142, 37);
		



		btn_liste.setFont(new Font("Tahoma", Font.BOLD, 15));
		contentPane.add(btn_liste);
		
		JPanel panel_1 = new JPanel();
		panel_1.setBounds(0, 0, 10, 10);
		contentPane.add(panel_1);
		
		JPanel panel_2 = new JPanel();
		panel_2.setBounds(0, 0, 10, 10);
		contentPane.add(panel_2);
		
		JLayeredPane layeredPane_1 = new JLayeredPane();
		layeredPane_1.setBounds(40, 167, 597, 340);
		contentPane.add(layeredPane_1);
		layeredPane_1.setLayout(new CardLayout(0, 0));
		
		JPanel panel_modifier = new JPanel();
		layeredPane_1.add(panel_modifier, "name_103445542634300");
		panel_modifier.setLayout(null);
		
		JLabel lblNewLabel_2 = new JLabel("Nom");
		lblNewLabel_2.setFont(new Font("Tahoma", Font.BOLD, 13));
		lblNewLabel_2.setBounds(78, 113, 106, 24);
		panel_modifier.add(lblNewLabel_2);
		
		nom_client_check = new JTextField();
		nom_client_check.setBounds(194, 115, 106, 24);
		panel_modifier.add(nom_client_check);
		nom_client_check.setColumns(10);
		
		JButton btnNewButton_4 = new JButton("Cherche");
		
		
		btnNewButton_4.setFont(new Font("Tahoma", Font.PLAIN, 12));
		btnNewButton_4.setBounds(361, 115, 85, 21);
		panel_modifier.add(btnNewButton_4);
		
		JPanel panel_ajouter = new JPanel();
		layeredPane_1.add(panel_ajouter, "name_27620091555400");
		panel_ajouter.setLayout(null);
		
		JLabel lblNewLabel_1 = new JLabel("Code");
		lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 13));
		lblNewLabel_1.setBounds(69, 36, 67, 24);
		panel_ajouter.add(lblNewLabel_1);
		
		JLabel lblNewLabel_3 = new JLabel("Nom");
		lblNewLabel_3.setFont(new Font("Tahoma", Font.BOLD, 13));
		lblNewLabel_3.setBounds(69, 90, 67, 24);
		panel_ajouter.add(lblNewLabel_3);
		
		field_client = new JTextField();
		field_client.setBounds(257, 40, 96, 19);
		panel_ajouter.add(field_client);
		field_client.setColumns(10);
		
		field_nom = new JTextField();
		field_nom.setBounds(257, 94, 96, 19);
		panel_ajouter.add(field_nom);
		field_nom.setColumns(10);
		
		JButton btn_ajouter_client = new JButton("Ajouter");
		btn_ajouter_client.setFont(new Font("Tahoma", Font.BOLD, 12));
		btn_ajouter_client.setBackground(Color.BLUE);
		btn_ajouter_client.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				try {
					Class.forName("com.mysql.jdbc.Driver");
					Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","");
					Statement stmt = con.createStatement();
					String sql = "Insert into clients Values ('"+field_client.getText()+"','"+field_nom.getText()+"','"+field_adresse.getText()+"','"+field_gsm.getText()+"','"+field_cin.getText()+"','"+field_cin.getText()+"')";
					boolean rs = stmt.execute(sql);
					JOptionPane.showMessageDialog (null, "Client added !", "Success", JOptionPane.INFORMATION_MESSAGE);
					layeredPane_1.removeAll() ; 
					layeredPane_1.add(panel_ajouter);
					layeredPane_1.repaint();
					layeredPane_1.revalidate() ; 
					con.close();
					
				}
				
				catch(Exception e1){
					System.out.print(e1);
					
				}
			}
		});
		btn_ajouter_client.setBounds(417, 285, 124, 30);
		panel_ajouter.add(btn_ajouter_client);
		
		JLabel lblNewLabel_4 = new JLabel("Adresse");
		lblNewLabel_4.setFont(new Font("Tahoma", Font.BOLD, 13));
		lblNewLabel_4.setBounds(69, 149, 67, 13);
		panel_ajouter.add(lblNewLabel_4);
		
		field_adresse = new JTextField();
		field_adresse.setBounds(257, 147, 96, 19);
		panel_ajouter.add(field_adresse);
		field_adresse.setColumns(10);
		
		JLabel lblNewLabel_5 = new JLabel("GSM");
		lblNewLabel_5.setFont(new Font("Tahoma", Font.BOLD, 13));
		lblNewLabel_5.setBounds(69, 199, 45, 13);
		panel_ajouter.add(lblNewLabel_5);
		
		field_gsm = new JTextField();
		field_gsm.setBounds(257, 197, 96, 19);
		panel_ajouter.add(field_gsm);
		field_gsm.setColumns(10);
		
		JLabel lblNewLabel_6 = new JLabel("CIN");
		lblNewLabel_6.setFont(new Font("Tahoma", Font.BOLD, 13));
		lblNewLabel_6.setBounds(69, 251, 45, 13);
		panel_ajouter.add(lblNewLabel_6);
		
		field_cin = new JTextField();
		field_cin.setBounds(257, 249, 96, 19);
		panel_ajouter.add(field_cin);
		field_cin.setColumns(10);
		
		JPanel panel_modify = new JPanel();
		layeredPane_1.add(panel_modify, "name_4127655148099");
		panel_modify.setLayout(null);
		
		JButton btnNewButton = new JButton("exit");
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				layeredPane_1.removeAll() ; 
				layeredPane_1.add(panel_modifier);
				layeredPane_1.repaint();
				layeredPane_1.revalidate() ;
			}
		});
		btnNewButton.setBounds(431, 309, 85, 21);
		panel_modify.add(btnNewButton);
		
		JLabel lblNewLabel_8 = new JLabel("Code");
		lblNewLabel_8.setBounds(10, 94, 45, 13);
		panel_modify.add(lblNewLabel_8);
		
		JLabel lblNewLabel_9 = new JLabel("Nom");
		lblNewLabel_9.setBounds(10, 130, 45, 13);
		panel_modify.add(lblNewLabel_9);
		
		JLabel lblNewLabel_10 = new JLabel("Adresse");
		lblNewLabel_10.setBounds(10, 170, 45, 13);
		panel_modify.add(lblNewLabel_10);
		
		JLabel lblNewLabel_11 = new JLabel("GSM");
		lblNewLabel_11.setBounds(10, 210, 45, 13);
		panel_modify.add(lblNewLabel_11);
		
		JLabel lblNewLabel_12 = new JLabel("Permis");
		lblNewLabel_12.setBounds(10, 251, 45, 13);
		panel_modify.add(lblNewLabel_12);
		
		JLabel lblNewLabel_13 = new JLabel("CIN");
		lblNewLabel_13.setBounds(10, 289, 45, 13);
		panel_modify.add(lblNewLabel_13);
		
		modifier_code = new JTextField();
		modifier_code.setBounds(65, 91, 96, 19);
		panel_modify.add(modifier_code);
		modifier_code.setColumns(10);
		
		modifier_nom = new JTextField();
		modifier_nom.setBounds(65, 127, 96, 19);
		panel_modify.add(modifier_nom);
		modifier_nom.setColumns(10);
		
		modifier_adresse = new JTextField();
		modifier_adresse.setBounds(65, 167, 96, 19);
		panel_modify.add(modifier_adresse);
		modifier_adresse.setColumns(10);
		
		modifier_gsm = new JTextField();
		modifier_gsm.setBounds(65, 207, 96, 19);
		panel_modify.add(modifier_gsm);
		modifier_gsm.setColumns(10);
		
		modifier_permis = new JTextField();
		modifier_permis.setBounds(65, 248, 96, 19);
		panel_modify.add(modifier_permis);
		modifier_permis.setColumns(10);
		
		modifier_cin = new JTextField();
		modifier_cin.setBounds(65, 286, 96, 19);
		panel_modify.add(modifier_cin);
		modifier_cin.setColumns(10);
		
		JLabel lblNewLabel_14 = new JLabel("Modifier");
		lblNewLabel_14.setFont(new Font("Tahoma", Font.BOLD, 14));
		lblNewLabel_14.setBounds(62, 51, 70, 13);
		panel_modify.add(lblNewLabel_14);
		
		JSeparator separator_2 = new JSeparator();
		separator_2.setBounds(20, 74, 152, 2);
		panel_modify.add(separator_2);
		
		JButton btnNewButton_1 = new JButton("Supprimer");
		btnNewButton_1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				try {
					Class.forName("com.mysql.jdbc.Driver");
					Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","");
					Statement stmt = con.createStatement();
					String sql = "Delete  from clients where client_nom='"+nom_client_check.getText()+"'" ;
					
					
					boolean rs = stmt.execute(sql);
					JOptionPane.showMessageDialog (null, "Client Supprimé !", "Success", JOptionPane.INFORMATION_MESSAGE);
					layeredPane_1.removeAll() ; 
					layeredPane_1.add(panel_modifier);
					layeredPane_1.repaint();
					layeredPane_1.revalidate() ; 
					con.close();
					
				}
				
				catch(Exception e1){
					System.out.print(e1);
					
				}
			}
		});
		btnNewButton_1.setFont(new Font("Tahoma", Font.BOLD, 14));
		btnNewButton_1.setBackground(Color.RED);
		btnNewButton_1.setBounds(302, 307, 112, 21);
		panel_modify.add(btnNewButton_1);
		
		JButton btnNewButton_5 = new JButton("Valider ");
		btnNewButton_5.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				try {
					Class.forName("com.mysql.jdbc.Driver");
					Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","");
					Statement stmt = con.createStatement();
					String sql = "Update  clients set client_code ='"+modifier_code.getText()+"',client_nom='"+modifier_nom.getText()+"',client_adresse='"+modifier_adresse.getText()+"',Num_GSM='"+modifier_gsm.getText()+"',CIN='"+modifier_cin.getText()+"',Permis='"+modifier_permis.getText()+"'where client_nom='"+nom_client_check.getText()+"'" ;
					
					boolean rs = stmt.execute(sql);
					JOptionPane.showMessageDialog (null, "Modification a été ajouté!", "Success", JOptionPane.INFORMATION_MESSAGE);
					con.close();
					
				}
				
				catch(Exception e1){
					System.out.print(e1);
					
				}
				
			}
		});
		btnNewButton_5.setBackground(Color.GREEN);
		btnNewButton_5.setFont(new Font("Tahoma", Font.BOLD, 14));
		btnNewButton_5.setBounds(166, 307, 112, 21);
		panel_modify.add(btnNewButton_5);
		
		JPanel enregistement = new JPanel();
		enregistement.setBackground(Color.LIGHT_GRAY);
		enregistement.setBounds(182, 10, 415, 226);
		panel_modify.add(enregistement);
		enregistement.setLayout(null);
		
		JLabel lblNewLabel_15 = new JLabel("Code");
		lblNewLabel_15.setForeground(Color.BLUE);
		lblNewLabel_15.setFont(new Font("Tahoma", Font.BOLD, 13));
		lblNewLabel_15.setBounds(10, 10, 45, 13);
		enregistement.add(lblNewLabel_15);
		
		JLabel lblNewLabel_16 = new JLabel("Nom");
		lblNewLabel_16.setForeground(Color.BLUE);
		lblNewLabel_16.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblNewLabel_16.setBounds(10, 52, 45, 13);
		enregistement.add(lblNewLabel_16);
		
		JLabel lblNewLabel_17 = new JLabel("Adresse");
		lblNewLabel_17.setForeground(Color.BLUE);
		lblNewLabel_17.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblNewLabel_17.setBounds(10, 91, 45, 13);
		enregistement.add(lblNewLabel_17);
		
		JLabel lblNewLabel_18 = new JLabel("GSM");
		lblNewLabel_18.setForeground(Color.BLUE);
		lblNewLabel_18.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblNewLabel_18.setBounds(10, 129, 45, 13);
		enregistement.add(lblNewLabel_18);
		
		JLabel lblNewLabel_19 = new JLabel("Permis");
		lblNewLabel_19.setForeground(Color.BLUE);
		lblNewLabel_19.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblNewLabel_19.setBounds(10, 203, 45, 13);
		enregistement.add(lblNewLabel_19);
		
		JLabel lblNewLabel_20 = new JLabel("CIN");
		lblNewLabel_20.setForeground(Color.BLUE);
		lblNewLabel_20.setFont(new Font("Tahoma", Font.BOLD, 11));
		lblNewLabel_20.setBounds(10, 170, 45, 13);
		enregistement.add(lblNewLabel_20);
		//here
		

		JPanel panel_Ajouter = new JPanel();
		// *******************************************Button-- Client *********************************
		
		btn_ajouter.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			layeredPane_1.removeAll() ; 
			layeredPane_1.add(panel_ajouter);
			layeredPane_1.repaint();
			layeredPane_1.revalidate() ; 
			
			}});
			
		btn_recherche.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				layeredPane_1.removeAll() ;                                                                               
				layeredPane_1.add(panel_modifier);
				layeredPane_1.repaint();
				
				layeredPane_1.revalidate() ; 
			}
			
			
		});
		btn_liste.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
			try {
				Class.forName("com.mysql.jdbc.Driver");
				Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","");
				Statement stmt = con.createStatement();
				String sql = "Select * from clients order by client_nom asc ";
				  ResultSet rs = stmt.executeQuery(sql);
				  JTable table = new JTable(buildTableModel(rs));
				  con.close();
				  JOptionPane.showMessageDialog(null,new JScrollPane(table));
				  
				  
				  
			} 
			catch(Exception e1){
				System.out.print(e1);
				
			} }
			
			
			
		
		
		// Clear fields after insertion 
		private void clearfields(){
			field_client.setText(null); 
			field_nom.setText(null);
			field_adresse.setText(null);
			field_gsm.setText(null);
			field_cin.setText(null);
			
			
		}
		public DefaultTableModel buildTableModel(ResultSet rs)
		        throws SQLException {

		    ResultSetMetaData metaData = (ResultSetMetaData) rs.getMetaData();

		    // names of columns
		    Vector<String> columnNames = new Vector<String>();
		    int columnCount = metaData.getColumnCount();
		    for (int column = 1; column <= columnCount; column++) {
		        columnNames.add(metaData.getColumnName(column));
		    }

		    // data of the table
		    Vector<Vector<Object>> data = new Vector<Vector<Object>>();
		    while (rs.next()) {
		        Vector<Object> vector = new Vector<Object>();
		        for (int columnIndex = 1; columnIndex <= columnCount; columnIndex++) {
		            vector.add(rs.getObject(columnIndex));
		        }
		        data.add(vector);
		    }

		    return new DefaultTableModel(data, columnNames);

		}

		});
		btnNewButton_4.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				//********if-name-exists********//
				try {
					Class.forName("com.mysql.jdbc.Driver");
					Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","");
					Statement stmt = con.createStatement();
					String sql = "Select * from clients where client_nom ='"+nom_client_check.getText()+"' ";
					  ResultSet rs = stmt.executeQuery(sql);
					if (rs.next())
					{	Client client = new Client (rs.getInt(1),rs.getString(2),rs.getString(3),rs.getInt(4),rs.getInt(5),rs.getInt(6));
						
						 client.getclient_code();
						
						layeredPane_1.removeAll() ; 
						layeredPane_1.add(panel_modify);
						// here we print the client's info in the Labels 
						
						JLabel lblNewLabel_code = new JLabel("client.getclient_code()");
						lblNewLabel_code.setBounds(80, 7, 120, 21);
						enregistement.add(lblNewLabel_code);
						
						JLabel lblNewLabel_nom = new JLabel(client.getclient_nom());
						lblNewLabel_nom.setBounds(80, 52, 120, 13);
						enregistement.add(lblNewLabel_nom);
						
						JLabel lblNewLabel_adresse = new JLabel(client.getclient_adresse());
						lblNewLabel_adresse.setBounds(80, 91, 120, 13);
						enregistement.add(lblNewLabel_adresse);
						
						JLabel lblNewLabel_gsm = new JLabel("gsm");
						lblNewLabel_gsm.setBounds(80, 129, 120, 13);
						enregistement.add(lblNewLabel_gsm);
						
						JLabel lblNewLabel_permis = new JLabel("permis");
						lblNewLabel_permis.setBounds(80, 203, 120, 13);
						enregistement.add(lblNewLabel_permis);
						
						JLabel lblNewLabel_cin = new JLabel("New label");
						lblNewLabel_cin.setBounds(80, 170, 120, 13);
						enregistement.add(lblNewLabel_cin);
						layeredPane_1.repaint();
						layeredPane_1.revalidate() ; 
						
						
					}
					else
					{
						JOptionPane.showMessageDialog(null,"Unvalid Name.","Alert",JOptionPane.WARNING_MESSAGE); 
					}
					
					
					con.close();
				}
				
				catch(Exception e1){
					System.out.print(e1);
					
				}
				
				// show informations to delete or modify
				
				
			}
		});
	
		
		
		
		
		
		
		
	
	
}	
}
