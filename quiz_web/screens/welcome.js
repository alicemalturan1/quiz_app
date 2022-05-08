import {StyleSheet, Dimensions,SafeAreaView,StatusBar} from 'react-native';
import React from "react";
import User from "../helper/user";

let user = new User();
let api = new API();
export default class Commands extends React.Component{




    constructor(props) {
        super(props);
        this.state={

        }

    }

    render(){


        return (


            <SafeAreaView style={styles.container}>

                <StatusBar
                    backgroundColor="#fff"

                />



            </SafeAreaView>

        );
    }











}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',

    },

});
