


import javafx.event.EventHandler;
import javafx.event.ActionEvent;
import javafx.application.Application;
import javafx.geometry.Pos;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.layout.*;
import javafx.scene.paint.Color;
import javafx.scene.shape.Rectangle;
import javafx.scene.text.Font;
import javafx.scene.text.FontWeight;
import javafx.scene.text.Text;
import javafx.stage.Stage;

import javax.swing.*;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.PrintWriter;
import java.util.ArrayList;
import java.util.Optional;
import java.util.Scanner;


public class Project extends Application {
    boolean ALLCAPS = false;

    Button [] KeyBoard = new Button[40];
    char Cch = 'A';
    char Sch = 'a';

   //Method to print the CAPS Alphabet in the keyboard
    public char capital(int i){
if(i ==0)
    Cch = 'A';
        return Cch++;
    }

 //Method to print the small Alphabets in the keyboard
    public char small(int i) {
if(i == 0)
    Sch = 'a';
        return Sch++;

    }

//TO check wheather the shift is on or not.
    public  boolean isCaps (){
        ALLCAPS  =!ALLCAPS ;
        return ALLCAPS;
    }

    int count = 0;

    public void start(Stage ps) {
        ps.setTitle("Dictionary");
        Rectangle r = new Rectangle(850, 25);
        r.setFill(Color.TRANSPARENT);
        r.setStroke(Color.BLACK);

        TextField tField = new TextField("<Enter Acronym Here>");
        tField.setPrefWidth(220);
        tField.setEditable(false);

        Text t = new Text("Virtual Dictionary");
        t.setFont(Font.font("Verdana", FontWeight.BLACK, 13));
        t.setFill(Color.BLACK);

        TextArea txt = new TextArea();
        txt.setWrapText(true);
        txt.setPrefSize(300, 250);
        txt.setStyle("-fx-padding: 0;" +
                "-fx-border-style: solid inside;" +
                "-fx-border-width: 1;" +
                "-fx-control-inner-background: lightgrey;" +
                "-fx-border-color: black;");

        BorderPane border = new BorderPane();
        border.setTop(r);

        BorderPane f = new BorderPane();
        f.setTop(t);

        Button[] button = new Button[6];
        Label l = new Label("Enter text here:");
        l.setFont(new Font(13));
        button[0] = new Button("Definition");
        button[1] = new Button("Add Word");
        button[2] = new Button("Delete Word");
        button[3] = new Button("File");
        button[4] = new Button("Help");
        button[5] = new Button("Clear");

        Button check = new Button("Text Check");
        Button clear = new Button("Clear Text");
       //Definition button
        button[0].setOnAction(e ->{
            String target = tField.getText();
            boolean isFound = false;
            String s,result = "";
            try{

                FileInputStream inStream = new FileInputStream("File.txt");
                Scanner file = new Scanner(inStream);

                while(file.hasNextLine()){



                        if (file.next().equals(target)) {
                             s = file.nextLine();
                            int index = s.indexOf(' ');
                            result +=  s.substring(index+3)+ "  ";

                            isFound = true;
                        }
                    tField.setText(result);

                    //file.nextLine();

                }
                file.close();
                if(isFound == false)
                    tField.setText("NOT FOUND");
             }
            catch (FileNotFoundException a){
                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                alert.setTitle("File Not Found");
                alert.setHeaderText(null);
                alert.setContentText(a.getMessage());

                alert.showAndWait();
            }



        });
       //Add word button
        button[1].setOnAction(e ->{
            TextInputDialog addWord = new TextInputDialog();
            addWord.setHeaderText("");
            addWord.setTitle("Input");
            addWord.setContentText("Please enter Acronyms – Definition to add:");

            Optional<String> result = addWord.showAndWait();
            try {

                FileInputStream inStream = new FileInputStream("File.txt");
                Scanner file = new Scanner(inStream);



                while (file.hasNextLine()) {
                    count++;
                    file.nextLine();
                }

                String ff[] = new String[count];


                file.close();

            }

        catch (FileNotFoundException a){

            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("File Not Found");
            alert.setHeaderText(null);
            alert.setContentText(a.getMessage());

            alert.showAndWait();
}

            });
       //Delete word button
        button[2].setOnAction(e -> {
            TextInputDialog delWord = new TextInputDialog();
            delWord.setHeaderText("");
            delWord.setTitle("Input");
            delWord.setContentText("Please enter a word to delete:");
            Optional<String> result = delWord.showAndWait();
            String target = delWord.getResult();
            ArrayList<String> input = new ArrayList<String>();
            boolean isFound = false;
            try{
                FileInputStream inStream = new FileInputStream("File.txt");
                Scanner file = new Scanner(inStream);
                while(file.hasNextLine()){

                    input.add(file.nextLine());

                }
                if (target.equals("")) {
                    Alert alert = new Alert(Alert.AlertType.INFORMATION);
                    alert.setTitle("Information Dialog");
                    alert.setHeaderText(null);
                    alert.setContentText("No word was enterd!!");

                    alert.showAndWait();
                }

else{



                String ss="";

                for(int i =0 ;i<input.size();i++) {
                    if (!input.get(i).equals("")) {
                        int spc = input.get(i).indexOf(" ");
                        ss = input.get(i).substring(0, spc);


                        if (ss.equals(target)) {
                            input.remove(i);
                            isFound = true;
                            file.close();
                            Alert alert = new Alert(Alert.AlertType.INFORMATION);
                            alert.setTitle("Information Dialog");
                            alert.setHeaderText(null);
                            alert.setContentText("Word was successfully deleted!!");

                            alert.showAndWait();


                            break;

                        }
                    }
                }



                    if (!isFound) {
                        Alert alert = new Alert(Alert.AlertType.INFORMATION);
                        alert.setTitle("Information Dialog");
                        alert.setHeaderText(null);
                        alert.setContentText("Word was not found!!");

                        alert.showAndWait();
                    }
                }




                FileOutputStream outstream = new FileOutputStream("File.txt");
                PrintWriter pwriter = new PrintWriter(outstream);

                for(String entery: input) {
                    if(entery.equals(""))
                        continue;
                    pwriter.print("\n" + entery);

                }

                pwriter.close();
            }

            catch (FileNotFoundException a){
                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                alert.setTitle("File Not Found");
                alert.setHeaderText(null);
                alert.setContentText(a.getMessage());

                alert.showAndWait();
            }



        });
        //help button
        button[4].setOnAction(e ->{
            Alert help = new Alert(Alert.AlertType.INFORMATION);
            help.setTitle("Help");
            help.setHeaderText(null);

            help.getDialogPane().setPrefSize(550,550);
            help.setContentText("Tips to use the application:" +"\n\n       To find the definition of an acronym:\n            1. Type the acronym using the virual keybord.\n" +
                    "            2. press the \"Definition\"  button."+ "\n            3. To clear press \"Clear\"."+
                    "\n\n       To add an acronym to the collection:\n            1. Press the \"Add Word\" button."
            +"\n            2. Enter the acronym and the definition in this form: Acronym - Defintion."+
                            "   \n\n       To delete an acronym from the collection:\n             1. Press the \"Delete\" button."+
                            "\n             2. Enter the acronym to be deleted."+"\n             3. Press \"OK\"."
                +"\n\n       To check if a given text contains any acronyms:"+"\n             1. Enter your text in the text area " +
                            "\"Enter your text here\"."+"\n             2. Press \"Check Text\" button."+
                    "\n             3. The acronym will be changed automatically."+ "\n             4. Press \"Clear Text\" to clear the text area."

                  +"\n\nDictionary® is an app to search for, or to store an acrnyom.\nThe app allows you to delete an acrynom from the " +
                    "collection or add to the colliction."
            +"\n\nFor any support enquiries plaese contact:\n       s201679080@kfupm.edu.sa");


            help.showAndWait();





        });

        //clear button
        button[5].setOnAction(e ->{ tField.setText("");
        });

        //Buttons for the Text Area
        check.setOnAction(e -> {

            String [] input = txt.getText().split(" ");
            String s="",result="",target;
            String found= "" ;



            for(int i =0; i<input.length;i++) {
                boolean isFound = false;
                target = input[i];

                try {
                    FileInputStream inStream = new FileInputStream("File.txt");
                    Scanner file = new Scanner(inStream);

                    while (file.hasNextLine()) {

                        if (file.next().equals(target)) {
                            s = file.nextLine();
                            int index = s.indexOf(' ');

                                found = s.substring(index+3);
                                isFound = true;


                                continue;
                        }

                        file.nextLine();


                    }
                    if(!isFound) {
                        result += target+ " ";

                    }
                    else
                        result += found+" ";

                }
                catch (FileNotFoundException a){
                    Alert alert = new Alert(Alert.AlertType.INFORMATION);
                    alert.setTitle("File Not Found");
                    alert.setHeaderText(null);
                    alert.setContentText(a.getMessage());

                    alert.showAndWait();
                }




            }

            txt.setText(result);



        });
        clear.setOnAction(e->{


            txt.setText("");


        });

    //initialize the button on the keyboard
        for (int i = 0; i < 40; i++) {
            KeyBoard[i] = new Button();
            KeyBoard[i].setPrefSize(45, 30);

        }
        //the buttons on the left
        for (int i = 0; i < 6; i++)
            button[i].setPrefSize(100, 20);

        //grid pane for the keypad
        GridPane grid = new GridPane();

        char alpha = 'A';
        char sAlpha = 'a';
        // inserting the alphabets in the keyboard with the action Listener.
        for (int i = 0; i < 26; i++) {
            KeyBoard[i].setText(alpha + "");

            //the Action listener using lambda exp.
            KeyBoard[i].setOnAction(e -> {
                        if (tField.getText().equals("<Enter Acronym Here>"))
                            tField.setText("");

                        Button button1 = (Button) e.getSource();
                        char ch=  button1.getText().charAt(0);
                        tField .setText(tField.getText()+ch);
                    }
            );
            alpha++;
        }

        //adding the buttons in the grid pane.
        int indexForAddingButtons = 0;
        for (int i = 0; i < 8; i++)
            for (int j = 0; j < 5; j++)
                grid.add(KeyBoard[indexForAddingButtons++], j, i);

        //continue the rest of the keyboard.
        KeyBoard[26].setText("-.");
        KeyBoard[26].setOnAction(e -> {
                    if (tField.getText().equals("<Enter Acronym Here>")
                    ) {
                        tField.setText("");
                    }
                    tField.setText(tField.getText() + KeyBoard[26].getText());

                }
        );

        KeyBoard[26].setText("-.");
        KeyBoard[26].setOnAction(e -> {
                    if (tField.getText().equals("<Enter Acronym Here>")
                    ) {
                        tField.setText("");
                    }
                    tField.setText(tField.getText() + KeyBoard[26].getText());

                }
        );

        KeyBoard[27].setText("&/");
        KeyBoard[27].setOnAction(e -> {
                    if (tField.getText().equals("<Enter Acronym Here>")
                    ) {
                        tField.setText("");
                    }
                    tField.setText(tField.getText() + KeyBoard[27].getText());
                }
        );

        //the shift button.
          alpha = 'A';
        KeyBoard[28].setText("Shift");
        KeyBoard[28].setOnAction(e -> {
            if (ALLCAPS) {
                for (int i = 0; i < 26; i++)
                    KeyBoard[i].setText((capital(i)) + "");
               KeyBoard[26].setText(".-");
               KeyBoard[27].setText("&/");
                isCaps(); // calling the method to apply the shift button to change the alphbets in the keyboard to CAPS.
            }
            else {
                for (int i = 0; i < 26; i++)
                    KeyBoard[i].setText((small(i)) + "");
               KeyBoard[26].setText("-.");
               KeyBoard[27].setText("/&");
                isCaps();// calling the method to apply the shift button to change the alphbets in the keyboard to SMALL.
            }
        });

        KeyBoard[29].setText("Spc");
        KeyBoard[29].setOnAction(e -> {
                    if (tField.getText().equals("<Enter Acronym Here>")
                    ) {
                        tField.setText("");
                    }
                    tField.setText(tField.getText() + " ");
                }
        );
//instring the numbers into the keyboard(1-9).
        for (int i = 1; i < 10; i++) {
            KeyBoard[i + 29].setText(i + "");
            KeyBoard[i + 29].setOnAction(e -> {
                if (tField.getText().equals("<Enter Acronym Here>")
                )
                    tField.setText("");
                Button button1 = (Button) e.getSource();
                char ch = button1.getText().charAt(0);
                tField.setText(tField.getText() + ch);

            });
        }
        //the ZERO.
        KeyBoard[39].setText("0");
        KeyBoard[39].setOnAction(e -> {
                    if (tField.getText().equals("<Enter Acronym Here>")
                    )
                        tField.setText("");
                    tField.setText(tField.getText() + "0");
                }
        );

        //horizantal box for the Clear Text and Check text.
        HBox Buttons2 = new HBox();
        Buttons2.setSpacing(10);
        Buttons2.getChildren().addAll(check,clear);

        //Vertical box for the Text Field and the Keyboard.
        VBox buttons = new VBox(button);
        buttons.setSpacing(20);
        VBox keyBox = new VBox();
        keyBox.getChildren().addAll(tField,grid);

        VBox txtBox = new VBox();
        txtBox.getChildren().addAll(l,txt,Buttons2);//the last
        txtBox.setSpacing(10);

        //Horizantal box for the the buttons on the left, keyboard and the Text Area.
        HBox hbox = new HBox();
        hbox.setSpacing(50);
        hbox.getChildren().addAll(buttons,keyBox,txtBox);
        //Style for the previous box.
        hbox.setStyle("-fx-padding: 10;" +
                "-fx-border-style: solid inside;" +
                "-fx-border-width: 1;" +
                "-fx-border-color: black;" );
        Group p = new Group(border,f);

        //Vertical box for the title and the content.
        VBox vbox = new VBox(p,hbox);
        ps.setResizable(false);
        Scene s = new Scene(vbox,820,350);
        ps.setScene(s);
        ps.show();
    }
    public static void main(String[] args) {
        launch(args);
    }
}